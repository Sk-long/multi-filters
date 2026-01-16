<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit;

class AdvancedFiltering extends Widget_Base {

    public function get_name() {
        return 'AdvancedFiltering';
    }

    public function get_title() {
        return esc_html__( 'Advanced Filtering', 'test-toolkit' );
    }

    public function get_icon() {
        return 'eicon-map-pin';
    }

    public function get_categories() {
        return [ 'test-elements' ];
    }

    protected function register_controls() {

        // === SERVICES SECTION ===
        $this->start_controls_section(
            'services_section',
            [
                'label' => __( 'Services', 'test-toolkit' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'services_title',
            [
                'label'       => esc_html__( 'Services Section Title', 'test-toolkit' ),
                'type'        => Controls_Manager::TEXT,
                'label_block' => true,
                'default'     => esc_html__( 'Search by Service:', 'test-toolkit' ),
            ]
        );
        $this->add_control(
            'services_con',
            [
                'label'   => esc_html__( 'Services Section Content', 'test-toolkit' ),
                'type'    => Controls_Manager::TEXTAREA,
                'default' => esc_html__( 'Select a Service to see the respective advanced points.', 'test-toolkit' ),
            ]
        );

        $srv = new Repeater();
            $srv->add_control(
                'name', [
                    'label' => __( 'Service Name', 'test-toolkit' ),
                    'type'  => Controls_Manager::TEXT,
                    'default' => 'Clinical Analysis',
                ]
            );
            $srv->add_control(
                'desc', [
                    'label' => __( 'Description', 'test-toolkit' ),
                    'type'  => Controls_Manager::TEXTAREA,
                    'default' => 'The post performs clinical analysis exams.',
                ]
            );
            $this->add_control(
                'services', [
                    'label' => __( 'Add Services', 'test-toolkit' ),
                    'type'  => Controls_Manager::REPEATER,
                    'fields'=> $srv->get_controls(),
                    'default' => [
                        ['name'=>'Clinical Analysis','desc'=>'Performs all clinical analysis.'],
                        ['name'=>'Pathological Anatomy','desc'=>'Receives all pathology exams.'],
                        ['name'=>'Cardiology Exams','desc'=>'Performs ECG, Holter, and MAPA exams.'],
                        ['name'=>'COVID-19 Tests','desc'=>'Performs COVID-19 testing.'],
                    ],
                ]
            );
        $this->end_controls_section();

        // === LOCATIONS SECTION ===
        $this->start_controls_section(
            'locations_section',
            [
                'label' => __( 'Advanced Locations', 'test-toolkit' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );

            $this->add_control(
                'search_title',
                [
                    'label'       => esc_html__( 'Search Section Title', 'test-toolkit' ),
                    'type'        => Controls_Manager::TEXT,
                    'label_block' => true,
                    'default'     => esc_html__( 'Search Type', 'test-toolkit' ),
                ]
            );
            $this->add_control(
                'search_con',
                [
                    'label'   => esc_html__( 'Search Section Content', 'test-toolkit' ),
                    'type'    => Controls_Manager::TEXTAREA,
                    'default' => esc_html__( 'Select a Search Type to see the respective advanced points for the selected service.', 'test-toolkit' ),
                ]
            );

            $this->add_control(
                'tab_title1',
                [
                    'label'       => esc_html__( 'Tab Title One', 'test-toolkit' ),
                    'type'        => Controls_Manager::TEXT,
                    'label_block' => true,
                    'default'     => esc_html__( 'Region', 'test-toolkit' ),
                ]
            );
             $this->add_control(
                'tab_title2',
                [
                    'label'       => esc_html__( 'Tab Title Two', 'test-toolkit' ),
                    'type'        => Controls_Manager::TEXT,
                    'label_block' => true,
                    'default'     => esc_html__( 'Address', 'test-toolkit' ),
                ]
            );
            $this->add_control(
                'tab_title3',
                [
                    'label'       => esc_html__( 'Tab Title Three', 'test-toolkit' ),
                    'type'        => Controls_Manager::TEXT,
                    'label_block' => true,
                    'default'     => esc_html__( 'Proximity', 'test-toolkit' ),
                ]
            );

            $this->add_control(
                'region_sel',
                [
                    'label'       => esc_html__( 'Region Select', 'test-toolkit' ),
                    'type'        => Controls_Manager::TEXT,
                    'label_block' => true,
                    'default'     => esc_html__( 'Choose A Region', 'test-toolkit' ),
                ]
            );

            $this->add_control(
                'address_in',
                [
                    'label'       => esc_html__( 'Address placeholder', 'test-toolkit' ),
                    'type'        => Controls_Manager::TEXT,
                    'label_block' => true,
                    'default'     => esc_html__( 'Type an address', 'test-toolkit' ),
                ]
            );

            $this->add_control(
                'proximity_in',
                [
                    'label'       => esc_html__( 'Proximity placeholder', 'test-toolkit' ),
                    'type'        => Controls_Manager::TEXT,
                    'label_block' => true,
                    'default'     => esc_html__( 'Enter distance or ZIP', 'test-toolkit' ),
                ]
            );

            $this->add_control(
                'search_btn',
                [
                    'label'       => esc_html__( 'Submit Button', 'test-toolkit' ),
                    'type'        => Controls_Manager::TEXT,
                    'label_block' => true,
                    'default'     => esc_html__( 'Search Now', 'test-toolkit' ),
                ]
            );

            $loc = new Repeater();
                $loc->add_control(
                    'city',
                    [
                        'label' => __( 'City', 'test-toolkit' ),
                        'type'  => Controls_Manager::TEXT,
                        'default' => 'Atlanta',
                    ]
                );
                $loc->add_control(
                    'region', 
                    [
                        'label' => __( 'Region / State', 'test-toolkit' ),
                        'type'  => Controls_Manager::TEXT,
                        'default' => 'Georgia',
                    ]
                );
                $loc->add_control(
                    'coll_lab', 
                    [
                        'label' => __( 'Advanced Center Title', 'test-toolkit' ),
                        'type'  => Controls_Manager::TEXT,
                        'default' => 'Advanced Center:',
                    ]
                );
                $loc->add_control(
                    'coll', 
                    [
                        'label' => __( 'Advanced Center Name', 'test-toolkit' ),
                        'type'  => Controls_Manager::TEXT,
                        'default' => 'Upstate University Hospital',
                    ]
                );
                $loc->add_control(
                    'icon1',
                    [
                        'label' => __( 'Address Icon', 'test-toolkit' ),
                        'type'  => Controls_Manager::MEDIA,
                    ]
                );
                $loc->add_control(
                    'info_tit1', 
                    [
                        'label' => __( 'Address Title', 'test-toolkit' ),
                        'type'  => Controls_Manager::TEXTAREA,
                        'default' => 'Address',
                    ]
                );
                $loc->add_control(
                    'address', 
                    [
                        'label' => __( 'Address', 'test-toolkit' ),
                        'type'  => Controls_Manager::TEXTAREA,
                        'default' => 'Bulls Stadium, California',
                    ]
                );
                $loc->add_control(
                    'icon2',
                    [
                        'label' => __( 'Zip Icon', 'test-toolkit' ),
                        'type'  => Controls_Manager::MEDIA,
                    ]
                );
                $loc->add_control(
                    'info_tit2', 
                    [
                        'label' => __( 'Zip Code Title', 'test-toolkit' ),
                        'type'  => Controls_Manager::TEXTAREA,
                        'default' => 'Zip Code',
                    ]
                );
                $loc->add_control(
                    'zip_cd', 
                    [
                        'label' => __( 'Zip Code', 'test-toolkit' ),
                        'type'  => Controls_Manager::TEXT,
                        'default' => '3011',
                    ]
                );
                $loc->add_control(
                    'icon3',
                    [
                        'label' => __( 'Phone Icon', 'test-toolkit' ),
                        'type'  => Controls_Manager::MEDIA,
                    ]
                );
                $loc->add_control(
                    'info_tit3', 
                    [
                        'label' => __( 'Phone Title', 'test-toolkit' ),
                        'type'  => Controls_Manager::TEXTAREA,
                        'default' => 'Phone',
                    ]
                );
                $loc->add_control(
                    'phone',
                    [
                        'label' => __( 'Phone Number', 'test-toolkit' ),
                        'type'  => Controls_Manager::TEXT,
                        'default' => '+1(213)5553890',
                    ]
                );
                $loc->add_control(
                    'icon4',
                    [
                        'label' => __( 'Phone Icon', 'test-toolkit' ),
                        'type'  => Controls_Manager::MEDIA,
                    ]
                );
                $loc->add_control(
                    'info_tit4', 
                    [
                        'label' => __( 'Email Title', 'test-toolkit' ),
                        'type'  => Controls_Manager::TEXTAREA,
                        'default' => 'Email',
                    ]
                );
                $loc->add_control(
                    'email', 
                    [
                        'label' => __( 'Email', 'test-toolkit' ),
                        'type'  => Controls_Manager::TEXT,
                        'default' => 'lapid@gmail.com',
                    ]
                );
                $loc->add_control(
                    'icon5',
                    [
                        'label' => __( 'Opening Hours Icon', 'test-toolkit' ),
                        'type'  => Controls_Manager::MEDIA,
                    ]
                );
                $loc->add_control(
                    'info_tit5', 
                    [
                        'label' => __( 'Opening Hours Title', 'test-toolkit' ),
                        'type'  => Controls_Manager::TEXTAREA,
                        'default' => 'Opening Hours',
                    ]
                );
                $loc->add_control(
                    'hours',
                    [
                        'label' => __( 'Opening Hours', 'test-toolkit' ),
                        'type'  => Controls_Manager::TEXTAREA,
                        'default' => "M-F: 7:30AM - 4:30PM\nClosed 12:30PM - 1:30PM",
                    ]
                );
                $loc->add_control(
                    'icon6',
                    [
                        'label' => __( 'Services Available Icon', 'test-toolkit' ),
                        'type'  => Controls_Manager::MEDIA,
                    ]
                );
                $loc->add_control(
                    'info_tit6', 
                    [
                        'label' => __( 'Services Available Title', 'test-toolkit' ),
                        'type'  => Controls_Manager::TEXTAREA,
                        'default' => 'Services Available',
                    ]
                );
                $loc->add_control(
                    'services', 
                    [
                        'label' => __( 'Services Available (comma separated)', 'test-toolkit' ),
                        'type'  => Controls_Manager::TEXT,
                        'default' => 'Clinical Analysis, Cardiology Exams',
                    ]
                );
                $loc->add_control(
                    'btn_text', 
                    [
                        'label' => __( 'Button Text', 'test-toolkit' ),
                        'type'  => Controls_Manager::TEXT,
                        'default' => 'Contact Us',
                    ]
                );
                $loc->add_control(
                    'btn_url', 
                    [
                        'label' => __( 'Button Url', 'test-toolkit' ),
                        'type'  => Controls_Manager::TEXT,
                        'default' => '#',
                    ]
                );

            $this->add_control(
                'locations', 
                [
                    'label' => __( 'Add Advanced Locations', 'test-toolkit' ),
                    'type'  => Controls_Manager::REPEATER,
                    'fields'=> $loc->get_controls(),
                    'default' => [
                        ['city'=>'Atlanta','region'=>'Georgia','services'=>'Clinical Analysis, Cardiology Exams'],
                        ['city'=>'Alexandria','region'=>'Georgia','services'=>'Pathological Anatomy, COVID-19 Tests'],
                        ['city'=>'Baton Rouge','region'=>'Louisiana','services'=>'Clinical Analysis'],
                        ['city'=>'Bossier City','region'=>'Louisiana','services'=>'Home Advanceds, Cardiology Exams'],
                    ],
                ]
            );
        $this->end_controls_section();

    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        ?>

        <!-- Main Advanced Area Start -->
        <div class="main-advanced-area pt-120">
            <div class="container">
                <div class="row">
                    <!-- Left Filters -->
                    <div class="col-lg-6">
                        <div class="advanced-content">

                            <div class="content-widget">
                                <?php if ($settings['services_title']): ?><h4><?php echo esc_html($settings['services_title']); ?></h4><?php endif; ?>
                                <?php if ($settings['services_con']): ?><p><?php echo esc_html($settings['services_con']); ?></p><?php endif; ?>

                                <?php foreach ($settings['services'] as $i => $srv): ?>
                                    <div class="form-check">
                                        <input class="form-check-input service-filter" type="checkbox" id="srv-<?php echo $i; ?>" value="<?php echo esc_attr($srv['name']); ?>">
                                        <label class="form-check-label" for="srv-<?php echo $i; ?>">
                                            <?php echo esc_html($srv['name']); ?>
                                            <?php if ($srv['desc']): ?><span><?php echo esc_html($srv['desc']); ?></span><?php endif; ?>
                                        </label>
                                    </div>
                                <?php endforeach; ?>
                            </div>

                            <div class="search-widget">
                                <?php if ($settings['search_title']): ?><h4><?php echo esc_html($settings['search_title']); ?></h4><?php endif; ?>
                                <?php if ($settings['search_con']): ?><p><?php echo esc_html($settings['search_con']); ?></p><?php endif; ?>

                                <div class="search-tab">
                                    <?php if ($settings['tab_title1'] || $settings['tab_title2'] || $settings['tab_title3']): ?>
                                        <nav>
                                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                                <?php if ($settings['tab_title1']): ?><button class="nav-link active" id="nav-region-tab" data-bs-toggle="tab" data-bs-target="#nav-region" type="button" role="tab"><?php echo wp_kses_post ($settings['tab_title1']); ?></button><?php endif; ?>
                                                <?php if ($settings['tab_title2']): ?><button class="nav-link" id="nav-address-tab" data-bs-toggle="tab" data-bs-target="#nav-address" type="button" role="tab"><?php echo wp_kses_post ($settings['tab_title2']); ?></button><?php endif; ?>
                                                <?php if ($settings['tab_title3']): ?><button class="nav-link" id="nav-proximity-tab" data-bs-toggle="tab" data-bs-target="#nav-proximity" type="button" role="tab"><?php echo wp_kses_post ($settings['tab_title3']); ?></button><?php endif; ?>
                                            </div>
                                        </nav>
                                    <?php endif; ?>

                                    <div class="tab-content" id="nav-tabContent">
                                        <!-- REGION TAB -->
                                        <div class="tab-pane fade show active" id="nav-region" role="tabpanel">
                                            <form id="advanced-search-region">
                                                <select class="form-select region-select">
                                                    <?php if ($settings['region_sel']): ?><option value=""><?php echo wp_kses_post ($settings['region_sel']); ?></option><?php endif; ?>
                                                    <?php
                                                    $regions = array_unique(array_map(fn($x)=>$x['region'], $settings['locations']));
                                                    foreach ($regions as $r): ?>
                                                        <option value="<?php echo esc_attr($r); ?>"><?php echo esc_html($r); ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                                <?php if ($settings['search_btn']): ?><button class="default-btn search-btn" type="submit"><?php echo wp_kses_post( $settings['search_btn'] ); ?></button><?php endif; ?>
                                            </form>
                                        </div>

                                        <!-- ADDRESS TAB -->
                                        <?php if ($settings['address_in']): ?>
                                            <div class="tab-pane fade" id="nav-address" role="tabpanel">
                                                <form id="advanced-search-address">
                                                    <input type="text" class="form-control address-input" placeholder="<?php echo esc_attr( $settings['address_in'] ); ?>">
                                                    <?php if ($settings['search_btn']): ?><button class="default-btn search-btn" type="submit"><?php echo wp_kses_post( $settings['search_btn'] ); ?></button><?php endif; ?>
                                                </form>
                                            </div>
                                        <?php endif; ?>

                                        <!-- PROXIMITY TAB -->
                                        <?php if ($settings['proximity_in']): ?>
                                            <div class="tab-pane fade" id="nav-proximity" role="tabpanel">
                                                <form id="advanced-search-proximity">
                                                    <input type="text" class="form-control proximity-input zip-input" placeholder="<?php echo esc_attr( $settings['proximity_in'] ); ?>">
                                                    <?php if ($settings['search_btn']): ?><button class="default-btn search-btn" type="submit"><?php echo wp_kses_post( $settings['search_btn'] ); ?></button><?php endif; ?>
                                                </form>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- Map Widget -->
                    <div class="col-lg-6">
                        <div class="map-widget">
                            <iframe id="advanced-map" src="https://www.google.com/maps?q=United+States&output=embed" allowfullscreen="" loading="lazy" width="100%" height="400"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Advanced Area End -->

        <!-- Places Area -->
        <div class="places-area pb-120">
            <div class="container">
                <div class="places-widget">
                    <h3 id="places-heading" class="d-flex">
                        <?php esc_html_e( 'Places for Advanced Points', 'test-toolkit' ); ?>
                        <span class="active-region d-none">
                            <?php esc_html_e( '(', 'test-toolkit' ); ?><span class="count"><?php esc_html_e( '0', 'test-toolkit' ); ?></span><?php esc_html_e( ')', 'test-toolkit' ); ?>
                            <span class="region-title">
                                <span class="region-name"></span>
                                <i class="ri-close-fill clear-filter" style="cursor: pointer;"></i>
                            </span>
                        </span>
                    </h3>
                    <div class="accordion" id="accordionExample"></div>
                </div>
            </div>
        </div>

        <script>
            window.advancedData = <?php echo wp_json_encode( $settings['locations'] ); ?>;
        </script>

        <script>
        jQuery(function($){
            const mapFrame = $('#advanced-map');

            function updateMap(location){
                if(!location) return;
                const address=encodeURIComponent(`${location.address||''}, ${location.city||''}, ${location.region||''}, ${location.zip_cd||''}`);
                mapFrame.attr('src',`https://www.google.com/maps?q=${address}&output=embed`);
            }

            function renderResults(list,label=''){
                let html='';
                const heading=$('#places-heading');
                const regionSpan=heading.find('.active-region');
                const regionName=regionSpan.find('.region-name');
                const countSpan=regionSpan.find('.count');

                if(label){ regionSpan.removeClass('d-none'); regionName.text(label); }
                else{ regionSpan.addClass('d-none'); regionName.text(''); }
                countSpan.text(list.length);

                if(list.length){
                    list.forEach((item,i)=>{
                        html+=`
                        <div class="accordion-item">
                            <button class="accordion-button ${i !== 0 ? 'collapsed' : ''}" 
                                type="button" data-bs-toggle="collapse" 
                                data-bs-target="#collapse${i}" 
                                aria-expanded="${i === 0 ? 'true' : 'false'}" 
                                aria-controls="collapse${i}">
                                ${item.city}
                            </button>

                            <div id="collapse${i}" class="accordion-collapse collapse ${i === 0 ? 'show' : ''}" 
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <h5><span>${item.coll_lab}</span> ${item.coll}</h5>
                                    ${ (item.city && item.region) ? `
                                        <h6>${item.city} - ${item.region}</h6>
                                    ` : '' }

                                    ${ (item.icon1.url && item.info_tit1 && item.address) ? `
                                    <div class="contact-item">
                                        <div class="icon">
                                            <img src="${item.icon1.url}" alt="Icon">
                                        </div>
                                        <div class="content">
                                            <span>${item.info_tit1}</span>
                                            <p>${item.address}</p>
                                        </div>
                                    </div>` : '' }

                                    ${ (item.info_tit2 && item.zip_cd && item.icon2.url) ? `
                                    <div class="contact-item">
                                        <div class="icon">
                                            <img src="${item.icon2.url}" alt="Icon">
                                        </div>
                                        <div class="content">
                                            <span>${item.info_tit2}</span>
                                            <p>${item.zip_cd}</p>
                                        </div>
                                    </div>` : '' }

                                    ${ (item.icon3.url && item.info_tit3 && item.phone) ? `
                                    <div class="contact-item">
                                        <div class="icon">
                                            <img src="${item.icon3.url}" alt="Icon">
                                        </div>
                                        <div class="content">
                                            <span>${item.info_tit3}</span>
                                            <a href="tel:${item.phone}">${item.phone}</a>
                                        </div>
                                    </div>` : '' }

                                    ${ (item.icon4.url && item.info_tit4 && item.email) ? `
                                    <div class="contact-item">
                                        <div class="icon">
                                            <img src="${item.icon4.url}" alt="Icon">
                                        </div>
                                        <div class="content">
                                            <span>${item.info_tit4}</span>
                                            <a href="mailto:${item.email}">${item.email}</a>
                                        </div>
                                    </div>` : '' }

                                    ${ (item.icon5.url && item.info_tit5 && item.hours) ? `
                                    <div class="contact-item">
                                        <div class="icon">
                                            <img src="${item.icon5.url}" alt="Icon">
                                        </div>
                                        <div class="content">
                                            <span>${item.info_tit5}</span>
                                            <p>${(item.hours || '').replace(/\\n/g, '<br>')}</p>
                                        </div>
                                    </div>` : '' }

                                    ${ (item.icon6.url && item.info_tit6 && item.services) ? `
                                    <div class="contact-item">
                                        <div class="icon">
                                            <img src="${item.icon6.url}" alt="Icon">
                                        </div>
                                        <div class="content">
                                            <span>${item.info_tit6}</span>
                                            <p>${item.services}</p>
                                        </div>
                                    </div>` : '' }

                                    ${ (item.btn_url && item.btn_text) ? `
                                        <a href="${item.btn_url}" class="default-btn">${item.btn_text}</a>
                                    ` : '' }
                                </div>
                            </div>
                        </div>`;
                    });
                }else{
                    html='<div class="accordion-item"><div class="accordion-body"><p>No advanced points found.</p></div></div>';
                }

                $('#accordionExample').html(html);

                // Accordion click updates map
                $('#accordionExample .accordion-button').off('click').on('click',function(){
                    const index=$(this).data('index');
                    updateMap(list[index]);
                });

                // Clear filter
                $('.clear-filter').off('click').on('click',function(){
                    $('.region-select').val('');
                    $('.address-input, .proximity-input').val('');
                    $('.service-filter').prop('checked',false);
                    renderResults(window.advancedData);
                    updateMap(window.advancedData[0]);
                });
            }

            function filterData(type){
                let selectedServices=$('.service-filter:checked').map(function(){return $(this).val().toLowerCase();}).get();
                let filtered=[]; let label='';

                if(type==='region'){
                    let region=$('.region-select').val().toLowerCase();
                    label=$('.region-select').val();
                    filtered=window.advancedData.filter(item=>
                        (region===''||(item.region||'').toLowerCase().includes(region)) &&
                        (selectedServices.length===0||selectedServices.some(s=>(item.services||'').toLowerCase().includes(s)))
                    );
                }else if(type==='address'){
                    let address=$('.address-input').val().toLowerCase();
                    label=address;
                    filtered=window.advancedData.filter(item=>
                        (address===''||(item.address||'').toLowerCase().includes(address)) &&
                        (selectedServices.length===0||selectedServices.some(s=>(item.services||'').toLowerCase().includes(s)))
                    );
                }else if(type==='proximity'){
                    let query=$('.proximity-input').val().toLowerCase();
                    label=query;
                    filtered=window.advancedData.filter(item=>
                        (query===''||
                            (item.city||'').toLowerCase().includes(query)||
                            (item.region||'').toLowerCase().includes(query)||
                            (item.zip_cd||'').toLowerCase().includes(query)
                        ) &&
                        (selectedServices.length===0||selectedServices.some(s=>(item.services||'').toLowerCase().includes(s)))
                    );
                }

                renderResults(filtered,label);
                if(filtered.length>0) updateMap(filtered[0]);
            }

            $('#advanced-search-region').on('submit',e=>{e.preventDefault();filterData('region');});
            $('#advanced-search-address').on('submit',e=>{e.preventDefault();filterData('address');});
            $('#advanced-search-proximity').on('submit',e=>{e.preventDefault();filterData('proximity');});

            renderResults(window.advancedData);
            if(window.advancedData.length>0) updateMap(window.advancedData[0]);
        });
        </script>

        <style>
           .advanced-content {
                border-radius: 10px;
                background: #F5EFFF;
                padding: 30px 25px 25px 25px;
            }
            .advanced-content .content-widget {
                margin-bottom: 65px;
            }
            .advanced-content .content-widget h4 {
                color: var(--titleColor);
                font-size: 18px;
                font-weight: 600;
                margin-bottom: 8px;
            }
            .advanced-content .content-widget p {
                color: #4E5E7C;
                margin-bottom: 25px;
                padding-bottom: 25px;
                border-bottom: solid 1px rgba(205, 193, 224, 0.56);
            }
            .advanced-content .content-widget .form-check {
                margin-bottom: 22px;
            }
            .advanced-content .content-widget .form-check:last-child {
                margin-bottom: 0;
            }
            .advanced-content .content-widget .form-check label {
                color: var(--titleColor);
                font-weight: 500;
            }
            .advanced-content .content-widget .form-check label span {
                color: #4E5E7C;
                font-size: 14px;
                display: block;
                margin-top: 5px;
            }
            .advanced-content .content-widget .form-check .form-check-input {
                width: 12px;
                height: 12px;
                flex-shrink: 0;
                position: relative;
                top: 2px;
                background: transparent;
                border-radius: 3px;
                border: 1px solid #A593C1;
            }
            .advanced-content .content-widget .form-check .form-check-input:focus {
                box-shadow: unset;
            }
            .advanced-content .content-widget .form-check .form-check-input:checked {
                background: var(--primaryColor);
            }
            .advanced-content .search-widget h4 {
                color: var(--titleColor);
                font-size: 18px;
                font-weight: 600;
                margin-bottom: 8px;
            }
            .advanced-content .search-widget p {
                color: #4E5E7C;
                margin-bottom: 15px;
            }
            .advanced-content .search-widget .search-tab {
                border-radius: 10px;
                background: var(--whiteColor);
                padding: 25px;
            }
            .advanced-content .search-widget .search-tab .nav-tabs {
                margin-bottom: 30px;
            }
            .advanced-content .search-widget .search-tab .nav-tabs .nav-link {
                border: none;
                padding: 0;
                color: var(--titleColor);
                font-weight: 500;
                margin-right: 30px;
                padding-bottom: 12px;
                position: relative;
                background-color: transparent;
            }
            .advanced-content .search-widget .search-tab .nav-tabs .nav-link::before {
                content: "";
                position: absolute;
                bottom: 0;
                left: 0;
                right: 0;
                opacity: 0;
                transition: var(--transition);
                height: 2px;
                background-color: #559ADC;
            }
            .advanced-content .search-widget .search-tab .nav-tabs .nav-link i {
                position: relative;
                top: 2px;
                margin-right: 3px;
            }
            .advanced-content .search-widget .search-tab .nav-tabs .nav-link .ri-calendar-2-line {
                top: -1px;
            }
            .advanced-content .search-widget .search-tab .nav-tabs .nav-link.active {
                color: #559ADC;
            }
            .advanced-content .search-widget .search-tab .nav-tabs .nav-link.active::before {
                opacity: 1;
            }
            .advanced-content .search-widget .search-tab .form-select {
                color: #000;
                font-size: 15px;
                font-weight: 500;
                border: none;
                height: 50px;
                margin-bottom: 18px;
                border-radius: 5px;
                background-color: #F3F3F3;
            }
            .advanced-content .search-widget .search-tab .form-select:focus {
                box-shadow: unset;
            }
            .advanced-content .search-widget .search-tab p {
                color: #4E5E7C;
                font-size: 12px;
                font-weight: 500;
                margin-bottom: 25px;
            }
            .advanced-content .search-widget .search-tab h5 {
                color: var(--titleColor);
                font-size: 16px;
                font-weight: 600;
                margin-bottom: 18px;
            }
            .advanced-content .search-widget .search-tab span {
                color: #4E5E7C;
                font-size: 15px;
                display: block;
                margin-bottom: 6px;
            }
            .advanced-content .search-widget .search-tab ul {
                list-style: none;
                padding-left: 0;
                margin-bottom: 0;
            }
            .advanced-content .search-widget .search-tab ul.style2 {
                margin-bottom: 20px;
            }
            .advanced-content .search-widget .search-tab ul li {
                display: inline-block;
                margin-right: 45px;
            }
            .advanced-content .search-widget .search-tab ul li:last-child {
                margin-right: 0;
            }
            .advanced-content .search-widget .search-tab ul li label {
                color: var(--titleColor);
                font-size: 14px;
                font-weight: 500;
            }
            .advanced-content .search-widget .search-tab ul li .form-check-input {
                width: 12px;
                height: 12px;
                position: relative;
                top: 3px;
                background: transparent;
                border: solid 1px rgba(85, 154, 220, 0.54);
                border-radius: 50%;
            }
            .advanced-content .search-widget .search-tab ul li .form-check-input:focus {
                box-shadow: unset;
            }
            .advanced-content .search-widget .search-tab ul li .form-check-input:checked {
                background: var(--primaryColor);
            }
            .advanced-content .search-widget .search-tab .default-btn {
                margin-top: 5px;
                background: #559ADC;
            }
            .advanced-content .search-widget .search-tab .default-btn:hover {
                background-color: var(--titleColor);
            }
            .advanced-content .form-control {
                color: #000;
                font-size: 15px;
                font-weight: 500;
                border: none;
                height: 50px;
                margin-bottom: 18px;
                border-radius: 5px;
                background-color: #F3F3F3;
            }
            .advanced-content .form-control:focus {
                box-shadow: unset;
            }
            .map-widget {
                position: sticky;
                top: 100px;
            }
            .map-widget iframe {
                width: 100%;
                height: 686px;
                border-radius: 10px;
            }

            .places-widget {
                margin-top: 60px;
            }
            .places-widget h3 {
                color: var(--titleColor);
                font-size: 24px;
                font-weight: 600;
                margin-bottom: 24px;
            }
            .places-widget h3 .region-title {
                border-radius: 3px;
                background: #F3F3F3;
                color: #4E5E7C;
                font-size: 15px;
                font-weight: 500;
                margin-left: 12px;
                padding: 8px 12px;
            }
            .places-widget h3 .active-region {
                margin-left: 5px;
            }
            .places-widget .accordion-item {
                border-radius: 5px;
                border: none;
                padding: 15px 34px;
                background: #F3F3F3;
                margin-bottom: 19px;
            }
            .places-widget .accordion-item .accordion-button {
                background-color: transparent;
                padding: 0;
                color: var(--titleColor);
                font-size: 20px;
                font-weight: 600;
                border-radius: 0;
                border: none;
                box-shadow: unset;
            }
            .places-widget .accordion-item .accordion-button::after {
                background-image: url(../images/accordion.svg);
                background-position: center center;
                background-size: 14px;
            }
            .places-widget .accordion-item .accordion-body {
                padding: 15px 0;
            }
            .places-widget .accordion-item .accordion-body p {
                margin-bottom: 18px;
            }
            .places-widget .accordion-item .accordion-body h5 {
                color: var(--titleColor);
                font-size: 18px;
                font-weight: 500;
                margin-bottom: 15px;
            }
            .places-widget .accordion-item .accordion-body h6 {
                color: var(--titleColor);
                font-size: 16px;
                font-weight: 500;
                margin-bottom: 15px;
            }
            .places-widget .accordion-item .accordion-body .contact-item {
                display: flex;
                margin-bottom: 28px;
            }
            .places-widget .accordion-item .accordion-body .contact-item:last-child {
                margin-bottom: 0;
            }
            .places-widget .accordion-item .accordion-body .contact-item .icon {
                width: 40px;
                height: 40px;
                flex-shrink: 0;
                line-height: 38px;
                position: relative;
                top: 5px;
                text-align: center;
                margin-right: 9px;
                border-radius: 50%;
                border: solid 1px rgba(85, 154, 220, 0.18);
            }
            .places-widget .accordion-item .accordion-body .contact-item a {
                display: block;
                color: var(--titleColor);
                font-size: 15px;
                font-weight: 500;
            }
            .places-widget .accordion-item .accordion-body .contact-item p {
                margin-bottom: 0;
                color: var(--titleColor);
                font-size: 15px;
                font-weight: 500;
            }
            .places-widget .accordion-item .accordion-body .contact-item span {
                color: #4E5E7C;
                font-size: 14px;
            }
            .places-widget .accordion-item .accordion-body .default-btn {
                background: #559ADC;
            }
            .places-widget .accordion-item .accordion-body .default-btn:hover {
                background-color: var(--titleColor);
            }

        </style>
        <?php
    }
}

Plugin::instance()->widgets_manager->register( new AdvancedFiltering );
