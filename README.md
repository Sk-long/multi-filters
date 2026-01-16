Advanced Multi-Search with Service and Location Filters (AJAX)

📌 Overview

This PR introduces an advanced, AJAX-powered multi-search system for collection points. Users can now filter results dynamically by services and multiple location-based criteria without page reloads, ensuring a smooth and responsive user experience.

✨ Key Features

✅ Service-based filtering (checkbox selection)

✅ Location-based search modes:

Region

Address

Proximity (city, region, ZIP)

✅ AJAX-style dynamic filtering (no page refresh)

✅ Real-time result rendering

✅ Automatic Google Map updates per result

✅ Clear filter functionality

✅ Elementor widget integration

🧠 Technical Details

Filters are applied client-side using dynamic JS rendering

Google Maps iframe updates based on selected result

Modular and scalable structure for adding more filters

Elementor repeater-powered data source

🎯 Benefits

Faster user interactions

Improved UX

Scalable filtering system

SEO-friendly structured data

Clean UI logic separation

🧪 How to Test

Select one or more services

Choose a search tab (Region / Address / Proximity)

Submit the search

Verify filtered results

Click a location and confirm the map updates

Use clear filter and confirm reset

<img width="1723" height="789" alt="muti-filter" src="https://github.com/user-attachments/assets/e3b0cbf4-9ec0-4e23-88dd-93d85f5794b5" />
<img width="1564" height="482" alt="muti-filter2" src="https://github.com/user-attachments/assets/2fb290e4-cd79-4e31-9296-8b849ee7d632" />
<img width="1449" height="389" alt="muti-filter3" src="https://github.com/user-attachments/assets/d9457b28-f612-4ce7-9d4a-fa2f70ba9bec" />
<img width="1476" height="439" alt="muti-filter4" src="https://github.com/user-attachments/assets/88ad9598-bbc0-4f90-bba3-8726413db6b2" />
<img width="1579" height="648" alt="muti-filter5" src="https://github.com/user-attachments/assets/3ecd8822-1322-4d70-8208-b27306b975e2" />



