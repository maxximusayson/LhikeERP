<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class SelectedModulesSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'module_id' => 1,
                'version_name' => 'Introduction',
                'description' => 'LHIKE ERP is a software that combines the functionalities of Logistics, Human Resource, Inventory, Kanban, and E-commerce into a single platform.',
                'release_date' => '2025-03-03',
                'link' => 'https://drive.google.com/file/d/1E01SjRzHOSgXfZTYTnxZGwY_Qz82FAOt/view'
            ],
            [
                'module_id' => 1,
                'version_name' => 'Sales Warehouse Logistics',
                'description' => 'This feature is a crucial aspect of modern supply chain management and movement of storage and goods within a warehouse facility',
                'release_date' => '2025-03-03',
                'link' => 'https://drive.google.com/file/d/1KkzeNWql1WpgpSZA7prCXuW-srTnqgPb/view'
            ],
            [
                'module_id' => 1,
                'version_name' => 'Finance',
                'description' => 'This feature refers to the management of money, investments, and financial activities within an individual, organization, or economy.',
                'release_date' => '2025-03-03',
                'link' => 'https://drive.google.com/file/d/1dfxYU1Gtl3rOiBwAA8yq4vex01lnnTJ8/view?usp=drive_link'
            ],
            [
                'module_id' => 2,
                'version_name' => 'Pages and Store',
                'description' => 'It offers interface screens for managing sales, status, platform, finance, and inventory.',
                'release_date' => '2023-01-15',
                'link' => 'https://drive.google.com/file/d/1Gz0wuwBGZwsXXLrG8XU2ooBzAeboKS4p/view'
            ],
            [
                'module_id' => 2,
                'version_name' => 'Page ROAS Tracker',
                'description' => 'It features tracking advertising campaign effectiveness and profitability on a webpage by monitoring conversion earnings.',
                'release_date' => '2025-03-03',
                'link' => 'https://drive.google.com/file/d/1JjJyzVD90c2LeVvTrbsVTmaTuvuq6WNH/view'
            ],
            [
                'module_id' => 2,
                'version_name' => 'Adspent ROAS Summary',
                'description' => 'It features Return on Ad Spend (ROAS), a crucial KPI for online and mobile marketing, indicating the profit generated per advertising investment at various levels of granularity.',
                'release_date' => '2023-03-10',
                'link' => 'https://drive.google.com/file/d/1adkurEg68BogzAkigYiDuuw-uZsuDCvB/view'
            ],
            [
                'module_id' => 2,
                'version_name' => 'Sales Tracker',
                'description' => 'A sales tracker helps firms monitor sales, analyze performance, predict trends, manage teams, and integrate data from multiple platforms.',
                'release_date' => '2025-05-05',
                'link' => 'https://drive.google.com/file/d/19PfzBVUcVxliDfCyMUZOWfGXibzDLj5_/view'
            ],
            [
                'module_id' => 2,
                'version_name' => 'Update Tracking Number',
                'description' => 'This feature automates the export of order records from Pancake POS to ERP and assigns them with tracking numbers.',
                'release_date' => '2025-05-05',
                'link' => 'https://drive.google.com/file/d/1c4QC6GFQYcV10F2T_DpzC3uPQQfEOavP/view'
            ],
            [
                'module_id' => 2,
                'version_name' => 'Sales from 3P Apps',
                'description' => 'It helps the administrator to add and track orders depending on the status of the order.',
                'release_date' => '2025-05-05',
                'link' => 'https://drive.google.com/file/d/1V8iFPg1Lg2LEeqEN5JG5Z7c5ttzjvyAh/view'
            ],
            [
                'module_id' => 2,
                'version_name' => 'Upload Sales Monitoring',
                'description' => 'A feature similar to Download Sales from 3P Apps. The only difference is you can upload a batch of orders using Excel.',
                'release_date' => '2025-05-05',
                'link' => 'https://drive.google.com/file/d/1v1YUrbt0aiZql6JM47s8WsBy5vIzz_K7/view'
            ],
            [
                'module_id' => 2,
                'version_name' => 'User  ID',
                'description' => 'It enables firms to improve sales operations and generate revenue.',
                'release_date' => '2025-05-05',
                'link' => 'https://drive.google.com/file/d/1PqMgKQtdQqBRSIxdqYxecVNz7dnCh4gp/view'
            ],
            [
                'module_id' => 2,
                'version_name' => 'Deleted Uploaded Sales Monitoring',
                'description' => 'Refers to removing or erasing data related to sales monitoring that has been previously uploaded or entered into a system or database.',
                'release_date' => '2025-05-05',
                'link' => 'https://drive.google.com/file/d/1XJylhyfHNi8hGi2vgnHCeAKcsYriH35s/view'
            ],
            [
                'module_id' => 2,
                'version_name' => 'Product Testing',
                'description' => 'Assesses a product\'s performance and usability to ensure user satisfaction, including instructions for accessing the product Testing Menu Lhike ERP System.',
                'release_date' => '2025-05-05',
                'link' => 'https://drive.google.com/file/d/1_MYfOf32WM2hRY70qzXatwr8cOVresff/view'
            ],
            [
                'module_id' => 2,
                'version_name' => 'Pages and Store',
                'description' => 'Features multiple interface screens for controlling various business tasks like sales, status, platform, and finance.',
                'release_date' => '2025-05-05',
                'link' => 'https://drive.google.com/file/d/1Gz0wuwBGZwsXXLrG8XU2ooBzAeboKS4p/view'
            ],
            [
                'module_id' => 2,
                'version_name' => 'BM & Ad Account',
                'description' => 'It promotes team cooperation, allows for granular control over access and permissions, and provides reporting and analytics to monitor campaign performance.',
                'release_date' => '2025-05-05',
                'link' => 'https://drive.google.com/file/d/147A9ngTARjYacV0UTsAjVukX6u1Uqsj8/view'
            ],
            [
                'module_id' => 2,
                'version_name' => 'Profitability Formula',
                'description' => 'The profitability formula divides a profit metric by net revenue, offering insight into a company\'s margin profile and future trajectory.',
                'release_date' => '2025-05-05',
                'link' => 'https://drive.google.com/file/d/15zNFXrBfgiPEsscMldjCfX0SJiCkhZtJ/view'
            ],
            [
                'module_id' => 3,
                'version_name' => 'Pancake Shop ID',
                'description' => 'Pancake is a management software supporting business owners manage, doing customer care and online sales, warehouse, and shipping management.',
                'release_date' => '2025-05-05',
                'link' => 'https://drive.google.com/file/d/1bwuzLYGq9CcteDK3r3br1OsH0kGziNZj/view'
            ],
            [
                'module_id' => 4,
                'version_name' => 'Kanban Board',
                'description' => 'Serves as a helpful visual aid for project management, aiding teams in visualizing their tasks and monitoring their advancement.',
                'release_date' => '2025-05-05',
                'link' => 'https://drive.google.com/file/d/1YHln141Zigv-VWBdNPFi9BQtYDpphJBg/view'
            ],
            [
                'module_id' => 4,
                'version_name' => 'General-Settings',
                'description' => 'Kanban board settings aid project management by providing a visual tool for task visualization and progress monitoring.',
                'release_date' => '2025-05-05',
                'link' => 'https://drive.google.com/file/d/19YYab1mlstNd-gOphOaFT_seG6-icP-P/view'
            ],
            [
                'module_id' => 5,
                'version_name' => 'Income Statement',
                'description' => 'This provides an overview of the company\'s operating revenue along with the expenditures to achieve that revenue.',
                'release_date' => '2025-05-05',
                'link' => 'https://drive.google.com/file/d/17LzbjEkXRMexIVvAao3XeLSM6-a8ibG2/view'
            ],
            [
                'module_id' => 5,
                'version_name' => 'Book Keeping',
                'description' => 'This provides an overview of the company\'s operating revenue along with the expenditures to achieve that revenue.',
                'release_date' => '2025-05-05',
                'link' => 'https://drive.google.com/file/d/19qnp2oZySxG5wiGOCis3CHdOYC06kz9G/view'
            ],
            [
                'module_id' => 5,
                'version_name' => 'Reimbursement',
                'description' => 'This refers to the compensation paid by an organization to an individual or party for out-of-pocket expenses incurred or overpayments made.',
                'release_date' => '2025-05-05',
                'link' => 'https://drive.google.com/file/d/103SZhMed-Cl5_gzK6MhMO_zh0lOT3_tp/view'
            ],
            [
                'module_id' => 5,
                'version_name' => 'Utility Expenses',
                'description' => 'This refers to the costs incurred by a company for utilizing necessities such as electricity, water, waste disposal, heating, and sewage.',
                'release_date' => '2025-05-05',
                'link' => 'https://drive.google.com/file/d/1DmS6f8kLLJ1vCLYVnmkqGGx6hOGNPFzr/view'
            ],
            [
                'module_id' => 5,
                'version_name' => 'Settings',
                'description' => 'This feature enables and disables the ability of the user to Hide/Unhide the shared expense and type request in reimbursement/utility expenses submodules.',
                'release_date' => '2025-05-05',
                'link' => 'https://drive.google.com/file/d/1Ad5jcHP-O-BccDZpxj3bW7TcY51HW2Dz/view'
            ],
            [
                'module_id' => 6,
                'version_name' => 'Purchase Order',
                'description' => 'This is a formal document detailing items or services a company plans to buy from suppliers. It includes item descriptions, quantities, prices, delivery dates, and terms.',
                'release_date' => '2025-05-05',
                'link' => 'https://drive.google.com/file/d/1Ycm7Z6r4FEv6ka-Hs5bQUNl_PnRuTs5K/view'
            ],
            [
                'module_id' => 6,
                'version_name' => 'Supplier',
                'description' => 'This is an entity or individual that provides goods or services to another entity or individual.',
                'release_date' => '2025-05-05',
                'link' => 'https://drive.google.com/file/d/1s_rbPD2CJ1TV2mXErSszvEBuWoF_FlhP/view'
            ],
            [
                'module_id' => 6,
                'version_name' => 'Product Items',
                'description' => 'This represents the individual units or measurements by which a product is distinguished and marketed.',
                'release_date' => '2025-05-05',
                'link' => 'https://drive.google.com/file/d/1SGx_IcGJJhAClwTQiWdvKSPVc5GjTkiC/view'
            ],
            [
                'module_id' => 6,
                'version_name' => 'Unit Codes',
                'description' => 'This feature provides a standardized and efficient way to categorize and reference specific units, be it military operations, academic programs, or industrial processes.',
                'release_date' => '2025-05-05',
                'link' => 'https://drive.google.com/file/d/16H3qdP1pm09ok9SE8iOXK0YXnpEzCPlD/view'
            ],
            [
                'module_id' => 6,
                'version_name' => 'Stocks',
                'description' => 'Stocks are the things businesses own to make or sell stuff. It could be raw materials, finished products, or even shares of other companies.',
                'release_date' => '2025-05-05',
                'link' => 'https://drive.google.com/file/d/1N3ad9n0m5XXuI68JknnfyNqu5Z8UheRQ/view'
            ],
            [
                'module_id' => 6,
                'version_name' => 'Transaction History',
                'description' => 'This contains all the detailed information toward the company\'s transaction on obtaining and releasing items from the inventory.',
                'release_date' => '2025-05-05',
                'link' => 'https://drive.google.com/file/d/1NnHmmGEln2F_eodBilQxpv6AUCIl1RJK/view'
            ],
            [
                'module_id' => 6,
                'version_name' => 'Fulfillment',
                'description' => 'This feature contains all the detailed information toward the company\'s transaction on obtaining and releasing items from the inventory.',
                'release_date' => '2025-05-05',
                'link' => 'https://drive.google.com/file/d/1_MjYuJWkKe_KwCScJJjwWHJepvj3wkRv/view'
            ],
            [
                'module_id' => 6,
                'version_name' => 'Shipped Out (Barcode)',
                'description' => 'This feature refers to a process where shipped items or packages are scanned to track their delivery status.',
                'release_date' => '2025-05-05',
                'link' => 'https://drive.google.com/file/d/1cjEU3YPr503TA3di6O0IU_YVYGy1gpUT/view'
            ],
            [
                'module_id' => 6,
                'version_name' => 'PPW (Barcode)',
                'description' => 'This feature allows the user to create a pending printed waybill of an item/product that is printed and attached to a package for delivery.',
                'release_date' => '2025-05-05',
                'link' => 'https://drive.google.com/file/d/1b6rHDPICjjG37cVsCTUNI7T9HROJVf-i/view'
            ],
            [
                'module_id' => 6,
                'version_name' => 'RTS Items',
                'description' => 'Refers to a "Return to Sender" package or mail returned instead of being delivered due to reasons like incorrect addresses or recipient refusal.',
                'release_date' => '2025-05-05',
                'link' => 'https://drive.google.com/file/d/1MBza1NaSohpa8P_aahd_6QuzKQl2iggN/view'
            ],
            [
                'module_id' => 6,
                'version_name' => 'Settings',
                'description' => 'Generally refer to the configurable options within the ERP system that allow users to customize various aspects of the software to suit their specific business needs.',
                'release_date' => '2025-05-05',
                'link' => 'https://drive.google.com/file/d/14ZbUCSYftToLPJu5FiFwA0AC-dk8dpF5/view'
            ],
            [
                'module_id' => 7,
                'version_name' => '201 File',
                'description' => 'A 201 file, sometimes called an employee personnel file or personnel record, basically holds a bunch of documents that tell the story of a person\'s work life.',
                'release_date' => '2025-05-05',
                'link' => 'https://drive.google.com/file/d/1xaa-XbEwE4CftBwcW8sTmbzjQewg0OCf/view'
            ],
            [
                'module_id' => 7,
                'version_name' => 'Deductions',
                'description' => 'This feature allows for customization of deductions for individual employees or groups ensuring fairness and accuracy.',
                'release_date' => '2025-05-05',
                'link' => 'https://drive.google.com/file/d/1I4rtgqtdqCbwtbSZoc0QYq00u_Tsv1eo/view'
            ],
            [
                'module_id' => 7,
                'version_name' => 'Cash Advance',
                'description' => 'This simplifies employee requests and approvals for cash advances. Once approved, it\'s deducted from the amount in subsequent salaries, ensuring efficient fund management.',
                'release_date' => '2025-05-05',
                'link' => 'https://drive.google.com/file/d/1WHeOQHKG64_rYqVk-Dg9A0CXdh0s9gUY/view'
            ],
            [
                'module_id' => 7,
                'version_name' => 'Department',
                'description' => 'This feature allows the user to add a department and set the employees in a department.',
                'release_date' => '2025-05-05',
                'link' => 'https://drive.google.com/file/d/1s9gCUmphujRTakFbu3PEmzMEsDqm34hf/view'
            ],
            [
                'module_id' => 7,
                'version_name' => 'Schedule',
                'description' => 'An interface in HR Module that redefines plans detailing activities, tasks for employees, and resources.',
                'release_date' => '2025-05-05',
                'link' => 'https://drive.google.com/file/d/1vxFhDjYVAKgSzt3aa_fBwx94Qz_6DTTs/view'
            ],
            [
                'module_id' => 7,
                'version_name' => 'Holiday',
                'description' => 'An interface in HR Module integrated into the calendar functionality, allowing administrators to set up holidays with details like name and date.',
                'release_date' => '2025-05-05',
                'link' => 'https://drive.google.com/file/d/1TZDvyjX7-OKLGlTNJ2hj5_mXJh16g6fo/view'
            ],
            [
                'module_id' => 7,
                'version_name' => 'Events',
                'description' => 'An interface in HR Module that gives organizers an overview of many aspects of event planning, management, and performance.',
                'release_date' => '2025-05-05',
                'link' => 'https://drive.google.com/file/d/14jYH1429UZnTj4GAANR4r6uF6O34_JN1/view'
            ],
            [
                'module_id' => 7,
                'version_name' => 'Payroll',
                'description' => 'An interface in the HR Module that refers to the compensation that a business provides to its employees for a specific period or on a designated date.',
                'release_date' => '2025-05-05',
                'link' => 'https://drive.google.com/file/d/1wa5YAtLog8rBIMfCP7YJzHPLd-yUetzU/view'
            ],
            [
                'module_id' => 7,
                'version_name' => 'Payroll Period',
                'description' => 'An interface in the HR Module that refers to the specific timeframe during which employee wages are calculated and processed.',
                'release_date' => '2025-05-05',
                'link' => 'https://drive.google.com/file/d/12f-dMEo7RoDmXO2LtpFJvqxE_6cEVsYk/view'
            ],
            [
                'module_id' => 7,
                'version_name' => 'Leave Credits',
                'description' => 'Accumulate at the company, specifying the rate for employees, and mentions the types of leave that can be taken using these credits subject to approval and adherence to company policies.',
                'release_date' => '2025-05-05',
                'link' => 'https://drive.google.com/file/d/1ghZqVke2Nq2ZGitB-N_PzC57k7NuRgiQ/view'
            ],
            [
                'module_id' => 7,
                'version_name' => 'Request',
                'description' => 'Formal communication made by an employee to their manager or another relevant authority figure, seeking permission, and any other work-related issues.',
                'release_date' => '2025-05-05',
                'link' => 'https://drive.google.com/file/d/1aT7XmKd7IDsK-FnUnnfbh8LzURcTKe8x/view'
            ],
            [
                'module_id' => 7,
                'version_name' => 'Branch',
                'description' => 'A branch of a company is a physical establishment on a location aside from the main office/headquarters wherein business activities are also conducted.',
                'release_date' => '2025-05-05',
                'link' => 'https://drive.google.com/file/d/1g_VpfTaqtNNnj31XiOuDydt1ml9ikZqh/view'
            ],
            [
                'module_id' => 7,
                'version_name' => 'Settings',
                'description' => 'This feature allows the user to modify the Night Shift Policy, Break Time Logs Policy, Grace Period for Time In, Over Time Pay Rules, Holiday Pay Rules, and Change Logs Requests.',
                'release_date' => '2025-05-05',
                'link' => 'https://drive.google.com/file/d/1B2PEaj_Go2Hmu87TAZp-adMxhaP8FNY_/view'
            ],
            [
                'module_id' => 8,
                'version_name' => 'User  Management',
                'description' => 'This feature involves the procedures and tasks related to overseeing user accounts and their access rights within a system.',
                'release_date' => '2025-05-05',
                'link' => 'https://drive.google.com/file/d/1dovYCpm7zFTjDfSlE48ekHdOZZqqZP4D/view'
            ],
            [
                'module_id' => 9,
                'version_name' => 'Request Access',
                'description' => 'This functionality enables users to update their personal details directly from their LHIKE DTR Account.',
                'release_date' => '2025-05-05',
                'link' => 'https://drive.google.com/file/d/1qolP9C40amt97OEr7Q7hkMiUyNrUuhSE/view'
            ],
            [
                'module_id' => 9,
                'version_name' => 'Timesheet',
                'description' => 'This tool allows employees to easily monitor their clock-in and clock-out times. Displaying hours worked, for time management and payroll processing.',
                'release_date' => '2025-05-05',
                'link' => 'https://drive.google.com/file/d/1k07Lqq1O1GcKLA4i9MsLtoHsJr-hGi7J/view'
            ],
            [
                'module_id' => 9,
                'version_name' => 'Change Schedule Request',
                'description' => 'This feature shows a type of requests an employee can ask for change schedule.',
                'release_date' => '2025-05-05',
                'link' => 'https://drive.google.com/file/d/1ry3Xvqv8a514RY0qL9PfHQa0wtsE233Z/view'
            ],
            [
                'module_id' => 9,
                'version_name' => 'Leave Request',
                'description' => 'This feature shows a type of requests an employee can ask for leave request.',
                'release_date' => '2025-05-05',
                'link' => 'https://drive.google.com/file/d/1ry3Xvqv8a514RY0qL9PfHQa0wtsE233Z/view'
            ],
            [
                'module_id' => 9,
                'version_name' => 'Overtime Request',
                'description' => 'This feature shows a type of requests an employee can ask for overtime request.',
                'release_date' => '2025-05-05',
                'link' => 'https://drive.google.com/file/d/1e-XyX1yqGahylIeVyojgyOv_-ztwk5dp/view'
            ],
            [
                'module_id' => 9,
                'version_name' => 'Offset Request',
                'description' => 'This functionality enables users to update their personal details directly from their LHIKE DTR Account.',
                'release_date' => '2025-05-05',
                'link' => 'https://drive.google.com/file/d/1X-KA6ZzX0Qm4xKQzeCr_dzvSiMjgLpfI/view'
            ]
        ];

        // Using Query Builder to insert data
        $this->db->table('selectedmodules')->insertBatch($data);
    }
}
