<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Garage Management System</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #2563eb;
            --secondary-color: #1e40af;
            --accent-color: #3b82f6;
            --text-color: #1f2937;
            --light-bg: #f8fafc;
        }
        
        .sidebar {
            min-height: 100vh;
            background: linear-gradient(135deg, #1e40af 0%, #2563eb 100%);
        }
        
        .dashboard-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .dashboard-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        }
        
        .stats-number {
            font-size: 2.5rem;
            font-weight: bold;
            background: linear-gradient(135deg, #2563eb, #1e40af);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        
        .form-input {
            transition: all 0.3s ease;
        }
        
        .form-input:focus {
            box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.1);
        }
        
        .printable-area {
            display: none;
        }
        
        @media print {
            .no-print {
                display: none;
            }
            .printable-area {
                display: block;
            }
        }
    </style>
</head>
<body class="bg-gray-50">
    <div class="flex">
        <!-- Sidebar -->
        <div class="sidebar w-64 text-white p-6 no-print">
            <div class="text-center mb-8">
                <h1 class="text-2xl font-bold">
                    <i class="fas fa-car me-2"></i>AutoCare Garage
                </h1>
                <p class="text-blue-100 text-sm">Management System</p>
            </div>
            
            <nav class="space-y-2">
                <a href="#" class="nav-item active" data-target="dashboard">
                    <i class="fas fa-tachometer-alt"></i> Dashboard
                </a>
                <a href="#" class="nav-item" data-target="vehicles">
                    <i class="fas fa-car"></i> Vehicles
                </a>
                <a href="#" class="nav-item" data-target="services">
                    <i class="fas fa-tools"></i> Services
                </a>
                <a href="#" class="nav-item" data-target="inventory">
                    <i class="fas fa-boxes"></i> Inventory
                </a>
                <a href="#" class="nav-item" data-target="customers">
                    <i class="fas fa-users"></i> Customers
                </a>
                <a href="#" class="nav-item" data-target="invoices">
                    <i class="fas fa-file-invoice"></i> Invoices
                </a>
                <a href="#" class="nav-item" data-target="reports">
                    <i class="fas fa-chart-bar"></i> Reports
                </a>
            </nav>
            
            <div class="mt-8 p-4 bg-blue-700 rounded-lg">
                <div class="flex items-center">
                    <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/5a6e1adb-bb8d-4ab8-b85c-be22a052d434.png" alt="Mechanic profile picture wearing blue uniform with garage logo" class="w-10 h-10 rounded-full">
                    <div class="ml-3">
                        <p class="text-sm font-medium">Admin User</p>
                        <p class="text-xs text-blue-200">System Administrator</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <div class="flex-1 p-6">
            <!-- Header -->
            <header class="bg-white rounded-lg shadow-sm p-4 mb-6 flex justify-between items-center no-print">
                <h2 class="text-xl font-semibold text-gray-800">Dashboard Overview</h2>
                <div class="flex items-center space-x-4">
                    <div class="relative">
                        <input type="text" placeholder="Search..." class="pl-10 pr-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <i class="fas fa-search absolute left-3 top-3 text-gray-400"></i>
                    </div>
                    <button class="p-2 text-gray-600 hover:text-blue-600">
                        <i class="fas fa-bell"></i>
                    </button>
                    <button class="p-2 text-gray-600 hover:text-blue-600">
                        <i class="fas fa-cog"></i>
                    </button>
                </div>
            </header>

            <!-- Dashboard Content -->
            <div id="dashboard" class="content-section">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">
                    <div class="dashboard-card bg-white rounded-lg shadow-sm p-6 text-center">
                        <div class="text-blue-600 mb-3">
                            <i class="fas fa-car text-3xl"></i>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-800">Total Vehicles</h3>
                        <div class="stats-number">142</div>
                        <p class="text-sm text-green-600">+12 this week</p>
                    </div>
                    
                    <div class="dashboard-card bg-white rounded-lg shadow-sm p-6 text-center">
                        <div class="text-green-600 mb-3">
                            <i class="fas fa-tools text-3xl"></i>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-800">Active Services</h3>
                        <div class="stats-number">28</div>
                        <p class="text-sm text-green-600">+5 today</p>
                    </div>
                    
                    <div class="dashboard-card bg-white rounded-lg shadow-sm p-6 text-center">
                        <div class="text-orange-600 mb-3">
                            <i class="fas fa-boxes text-3xl"></i>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-800">Inventory Items</h3>
                        <div class="stats-number">156</div>
                        <p class="text-sm text-red-600">-8 low stock</p>
                    </div>
                    
                    <div class="dashboard-card bg-white rounded-lg shadow-sm p-6 text-center">
                        <div class="text-purple-600 mb-3">
                            <i class="fas fa-file-invoice text-3xl"></i>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-800">Revenue</h3>
                        <div class="stats-number">$12,458</div>
                        <p class="text-sm text-green-600">+$2,340 this week</p>
                    </div>
                </div>

                <!-- Recent Activity -->
                <div class="bg-white rounded-lg shadow-sm p-6 mb-6">
                    <h3 class="text-lg font-semibold mb-4">Recent Activities</h3>
                    <div class="space-y-3">
                        <div class="flex items-center justify-between p-3 bg-blue-50 rounded-lg">
                            <div class="flex items-center">
                                <div class="w-10 h-10 bg-blue-100 rounded-full flex items-center justify-center mr-3">
                                    <i class="fas fa-car text-blue-600"></i>
                                </div>
                                <div>
                                    <p class="font-medium">New vehicle registration</p>
                                    <p class="text-sm text-gray-600">Toyota Camry - ABC123</p>
                                </div>
                            </div>
                            <span class="text-sm text-gray-500">2 hours ago</span>
                        </div>
                        
                        <div class="flex items-center justify-between p-3 bg-green-50 rounded-lg">
                            <div class="flex items-center">
                                <div class="w-10 h-10 bg-green-100 rounded-full flex items-center justify-center mr-3">
                                    <i class="fas fa-check text-green-600"></i>
                                </div>
                                <div>
                                    <p class="font-medium">Service completed</p>
                                    <p class="text-sm text-gray-600">Oil change - Honda Civic</p>
                                </div>
                            </div>
                            <span class="text-sm text-gray-500">4 hours ago</span>
                        </div>
                        
                        <div class="flex items-center justify-between p-3 bg-yellow-50 rounded-lg">
                            <div class="flex items-center">
                                <div class="w-10 h-10 bg-yellow-100 rounded-full flex items-center justify-center mr-3">
                                    <i class="fas fa-exclamation text-yellow-600"></i>
                                </div>
                                <div>
                                    <p class="font-medium">Low stock alert</p>
                                    <p class="text-sm text-gray-600">Engine oil - Only 5 left</p>
                                </div>
                            </div>
                            <span class="text-sm text-gray-500">6 hours ago</span>
                        </div>
                    </div>
                </div>

                <!-- Quick Actions -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="bg-white rounded-lg shadow-sm p-6">
                        <h3 class="text-lg font-semibold mb-4">Quick Actions</h3>
                        <div class="space-y-2">
                            <button class="w-full bg-blue-600 text-white py-2 px-4 rounded-lg hover:bg-blue-700 transition">
                                <i class="fas fa-plus mr-2"></i> New Vehicle
                            </button>
                            <button class="w-full bg-green-600 text-white py-2 px-4 rounded-lg hover:bg-green-700 transition">
                                <i class="fas fa-tools mr-2"></i> Create Service
                            </button>
                            <button class="w-full bg-purple-600 text-white py-2 px-4 rounded-lg hover:bg-purple-700 transition">
                                <i class="fas fa-file-invoice mr-2"></i> Generate Invoice
                            </button>
                        </div>
                    </div>
                    
                    <div class="bg-white rounded-lg shadow-sm p-6 md:col-span-2">
                        <h3 class="text-lg font-semibold mb-4">Monthly Revenue Chart</h3>
                        <div class="h-48 bg-gray-50 rounded-lg flex items-center justify-center">
                            <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/e1d62220-82fa-44e5-98cb-fbe027e1e770.png" alt="Bar chart showing monthly revenue growth with highest peaks in summer months" class="w-full h-full object-contain">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Vehicles Section -->
            <div id="vehicles" class="content-section hidden">
                <div class="bg-white rounded-lg shadow-sm p-6">
                    <div class="flex justify-between items-center mb-6">
                        <h2 class="text-xl font-semibold">Vehicle Management</h2>
                        <button class="bg-blue-600 text-white py-2 px-4 rounded-lg hover:bg-blue-700">
                            <i class="fas fa-plus mr-2"></i> Add Vehicle
                        </button>
                    </div>
                    
                    <div class="overflow-x-auto">
                        <table class="w-full table-auto">
                            <thead>
                                <tr class="bg-gray-50">
                                    <th class="px-4 py-2 text-left">Vehicle ID</th>
                                    <th class="px-4 py-2 text-left">Owner</th>
                                    <th class="px-4 py-2 text-left">Make/Model</th>
                                    <th class="px-4 py-2 text-left">License Plate</th>
                                    <th class="px-4 py-2 text-left">Status</th>
                                    <th class="px-4 py-2 text-left">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="border-b">
                                    <td class="px-4 py-3">V001</td>
                                    <td class="px-4 py-3">John Smith</td>
                                    <td class="px-4 py-3">Toyota Camry</td>
                                    <td class="px-4 py-3">ABC123</td>
                                    <td class="px-4 py-3"><span class="bg-green-100 text-green-800 px-2 py-1 rounded">Active</span></td>
                                    <td class="px-4 py-3">
                                        <button class="text-blue-600 hover:text-blue-800 mr-2">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <button class="text-red-600 hover:text-red-800">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr class="border-b">
                                    <td class="px-4 py-3">V002</td>
                                    <td class="px-4 py-3">Sarah Johnson</td>
                                    <td class="px-4 py-3">Honda Civic</td>
                                    <td class="px-4 py-3">XYZ789</td>
                                    <td class="px-4 py-3"><span class="bg-yellow-100 text-yellow-800 px-2 py-1 rounded">In Service</span></td>
                                    <td class="px-4 py-3">
                                        <button class="text-blue-600 hover:text-blue-800 mr-2">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <button class="text-red-600 hover:text-red-800">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr class="border-b">
                                    <td class="px-4 py-3">V003</td>
                                    <td class="px-4 py-3">Mike Wilson</td>
                                    <td class="px-4 py-3">Ford F-150</td>
                                    <td class="px-4 py-3">TRK456</td>
                                    <td class="px-4 py-3"><span class="bg-red-100 text-red-800 px-2 py-1 rounded">Maintenance</span></td>
                                    <td class="px-4 py-3">
                                        <button class="text-blue-600 hover:text-blue-800 mr-2">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <button class="text-red-600 hover:text-red-800">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- PHP/MySQL Code Section (Hidden) -->
            <div class="bg-gray-100 p-6 mt-6 rounded-lg no-print">
                <h3 class="text-lg font-semibold mb-4">PHP/MySQL Backend Code Structure</h3>
                <div class="bg-white p-4 rounded-lg">
                    <pre class="bg-gray-800 text-green-400 p-4 rounded overflow-x-auto">
<?php
// Database configuration
define('DB_HOST', 'localhost');
define('DB_NAME', 'garage_management');
define('DB_USER', 'root');
define('DB_PASS', '');

// Create database connection
class Database {
    private $connection;
    
    public function __construct() {
        $this->connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        
        if ($this->connection->connect_error) {
            die("Connection failed: " . $this->connection->connect_error);
        }
    }
    
    public function getConnection() {
        return $this->connection;
    }
}

// Vehicle Management Class
class Vehicle {
    private $db;
    
    public function __construct() {
        $this->db = new Database();
    }
    
    public function addVehicle($data) {
        $conn = $this->db->getConnection();
        $stmt = $conn->prepare("INSERT INTO vehicles (owner_id, make, model, year, license_plate, vin, color) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ississs", $data['owner_id'], $data['make'], $data['model'], $data['year'], $data['license_plate'], $data['vin'], $data['color']);
        
        return $stmt->execute();
    }
    
    public function getVehicles() {
        $conn = $this->db->getConnection();
        $result = $conn->query("SELECT v.*, c.name as owner_name FROM vehicles v LEFT JOIN customers c ON v.owner_id = c.id");
        
        $vehicles = [];
        while ($row = $result->fetch_assoc()) {
            $vehicles[] = $row;
        }
        
        return $vehicles;
    }
}

// Service Management Class
class Service {
    private $db;
    
    public function __construct() {
        $this->db = new Database();
    }
    
    public function createService($data) {
        $conn = $this->db->getConnection();
        $stmt = $conn->prepare("INSERT INTO services (vehicle_id, service_type, description, cost, status) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("issds", $data['vehicle_id'], $data['service_type'], $data['description'], $data['cost'], $data['status']);
        
        return $stmt->execute();
    }
}

// Inventory Management Class
class Inventory {
    private $db;
    
    public function __construct() {
        $this->db = new Database();
    }
    
    public function updateInventory($item_id, $quantity) {
        $conn = $this->db->getConnection();
        $stmt = $conn->prepare("UPDATE inventory SET quantity = quantity - ? WHERE id = ?");
        $stmt->bind_param("ii", $quantity, $item_id);
        
        return $stmt->execute();
    }
}

// Create necessary tables
function createTables() {
    $db = new Database();
    $conn = $db->getConnection();
    
    $tables = [
        "CREATE TABLE IF NOT EXISTS customers (
            id INT AUTO_INCREMENT PRIMARY KEY,
            name VARCHAR(100) NOT NULL,
            email VARCHAR(100),
            phone VARCHAR(20),
            address TEXT,
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        )",
        
        "CREATE TABLE IF NOT EXISTS vehicles (
            id INT AUTO_INCREMENT PRIMARY KEY,
            owner_id INT,
            make VARCHAR(50) NOT NULL,
            model VARCHAR(50) NOT NULL,
            year INT,
            license_plate VARCHAR(20) UNIQUE,
            vin VARCHAR(50),
            color VARCHAR(30),
            status ENUM('active', 'in_service', 'maintenance') DEFAULT 'active',
            FOREIGN KEY (owner_id) REFERENCES customers(id)
        )",
        
        "CREATE TABLE IF NOT EXISTS services (
            id INT AUTO_INCREMENT PRIMARY KEY,
            vehicle_id INT,
            service_type VARCHAR(100) NOT NULL,
            description TEXT,
            cost DECIMAL(10,2),
            status ENUM('pending', 'in_progress', 'completed') DEFAULT 'pending',
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
            completed_at TIMESTAMP NULL,
            FOREIGN KEY (vehicle_id) REFERENCES vehicles(id)
        )",
        
        "CREATE TABLE IF NOT EXISTS inventory (
            id INT AUTO_INCREMENT PRIMARY KEY,
            name VARCHAR(100) NOT NULL,
            category VARCHAR(50),
            quantity INT DEFAULT 0,
            price DECIMAL(10,2),
            min_stock_level INT DEFAULT 5,
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        )"
    ];
    
    foreach ($tables as $table) {
        $conn->query($table);
    }
}

// Initialize database tables
createTables();
?>
                    </pre>
                </div>
            </div>
        </div>
    </div>

    <!-- Printable Invoice (Hidden) -->
    <div class="printable-area">
        <div class="p-8">
            <div class="text-center mb-6">
                <h1 class="text-2xl font-bold">AutoCare Garage</h1>
                <p>123 Garage Street, City, State 12345</p>
                <p>Phone: (555) 123-4567 | Email: info@autocare.com</p>
            </div>
            
            <div class="border-b-2 border-gray-300 pb-4 mb-4">
                <h2 class="text-xl font-semibold">INVOICE #INV-001</h2>
                <p>Date: <?php echo date('Y-m-d'); ?></p>
            </div>
            
            <div class="mb-6">
                <h3 class="text-lg font-semibold">Customer Information</h3>
                <p>John Smith</p>
                <p>123 Main St, Anytown</p>
                <p>Phone: (555) 987-6543</p>
            </div>
            
            <table class="w-full border-collapse border border-gray-400 mb-6">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="border border-gray-300 px-4 py-2">Description</th>
                        <th class="border border-gray-300 px-4 py-2">Quantity</th>
                        <th class="border border-gray-300 px-4 py-2">Price</th>
                        <th class="border border-gray-300 px-4 py-2">Total</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="border border-gray-300 px-4 py-2">Oil Change</td>
                        <td class="border border-gray-300 px-4 py-2">1</td>
                        <td class="border border-gray-300 px-4 py-2">$45.00</td>
                        <td class="border border-gray-300 px-4 py-2">$45.00</td>
                    </tr>
                    <tr>
                        <td class="border border-gray-300 px-4 py-2">Air Filter</td>
                        <td class="border border-gray-300 px-4 py-2">1</td>
                        <td class="border border-gray-300 px-4 py-2">$25.00</td>
                        <td class="border border-gray-300 px-4 py-2">$25.00</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="3" class="border border-gray-300 px-4 py-2 text-right font-semibold">Total:</td>
                        <td class="border border-gray-300 px-4 py-2 font-semibold">$70.00</td>
                    </tr>
                </tfoot>
            </table>
            
            <div class="text-center mt-8">
                <p>Thank you for choosing AutoCare Garage!</p>
                <p>www.autocare-garage.com</p>
            </div>
        </div>
    </div>

    <script>
        // Navigation functionality
        document.addEventListener('DOMContentLoaded', function() {
            const navItems = document.querySelectorAll('.nav-item');
            const contentSections = document.querySelectorAll('.content-section');
            
            navItems.forEach(item => {
                item.addEventListener('click', function(e) {
                    e.preventDefault();
                    
                    // Remove active class from all items
                    navItems.forEach(nav => nav.classList.remove('active'));
                    
                    // Add active class to clicked item
                    this.classList.add('active');
                    
                    // Hide all content sections
                    contentSections.forEach(section => section.classList.add('hidden'));
                    
                    // Show target section
                    const target = this.getAttribute('data-target');
                    document.getElementById(target).classList.remove('hidden');
                });
            });
            
            // Initialize sample data for demonstration
            initSampleData();
        });
        
        function initSampleData() {
            // This would typically be handled by PHP/MySQL backend
            console.log('Initializing garage management system...');
        }
        
        function generateInvoice() {
            window.print();
        }
    </script>
</body>
</html>

