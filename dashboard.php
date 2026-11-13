<?php

include("connect.php");

/* =========================================
   DASHBOARD STATISTICS
========================================= */

/* CUSTOMER COUNT */
$customer_result = mysqli_query(
    $db_con,
    "SELECT COUNT(*) AS total FROM customer"
);

$customer_data = mysqli_fetch_assoc($customer_result);
$total_customers = $customer_data['total'];


/* STAFF COUNT */
$staff_result = mysqli_query(
    $db_con,
    "SELECT COUNT(*) AS total FROM staff"
);

$staff_data = mysqli_fetch_assoc($staff_result);
$total_staff = $staff_data['total'];


/* ADMIN COUNT */
$admin_result = mysqli_query(
    $db_con,
    "SELECT COUNT(*) AS total FROM admin"
);

$admin_data = mysqli_fetch_assoc($admin_result);
$total_admins = $admin_data['total'];

?>

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>ZenithBank | Dashboard</title>

    <link
        rel="stylesheet"
        href="css/style.css"
    >

</head>


<body>


<!-- =========================================
     NAVIGATION
========================================= -->

<header class="navbar">

    <div class="logo">

        <span>Zenith</span>Bank

    </div>


    <nav>

        <a
            href="index.php"
            class="active"
        >
            Home
        </a>

        <a href="viewcustomer.php">
            Customers
        </a>

        <a href="viewstaff.php">
            Staff
        </a>

        <a href="viewadmin.php">
            Admin
        </a>
		

        <a
            href="#"
            class="logout"
        >
            Logout
        </a>

    </nav>

</header>



<!-- =========================================
     MAIN DASHBOARD
========================================= -->

<main class="dashboard">


    <!-- =====================================
         DASHBOARD HEADER
    ====================================== -->

    <section class="dashboard-header">

        <div>

            <h1>
                Banking Management System
            </h1>

            <p>
                Welcome to the ZenithBank administration dashboard.
            </p>

        </div>

    </section>



    <!-- =====================================
         STATISTICS CARDS
    ====================================== -->

    <section class="stats">


        <!-- CUSTOMERS -->

        <div class="stat-card">

            <div class="stat-icon">
                &#128100;
            </div>


            <div>

                <h3>
                    Customers
                </h3>

                <p>
                    <?php echo $total_customers; ?>
                </p>

            </div>

        </div>



        <!-- STAFF -->

        <div class="stat-card">

            <div class="stat-icon">
                &#128188;
            </div>


            <div>

                <h3>
                    Staff
                </h3>

                <p>
                    <?php echo $total_staff; ?>
                </p>

            </div>

        </div>



        <!-- ADMINISTRATORS -->

        <div class="stat-card">

            <div class="stat-icon">
                &#128272;
            </div>


            <div>

                <h3>
                    Administrators
                </h3>

                <p>
                    <?php echo $total_admins; ?>
                </p>

            </div>

        </div>


    </section>



    <!-- =====================================
         QUICK ACTIONS
    ====================================== -->

    <section class="quick-section">

        <h2>
            Quick Actions
        </h2>


        <div class="quick-actions">


            <!-- CUSTOMER -->

            <a
                href="viewcustomer.php"
                class="action-card"
            >

                <span>
                    &#128100;
                </span>

                <h3>
                    Manage Customers
                </h3>

                <p>
                    Add, edit, view and delete customers.
                </p>

            </a>



            <!-- STAFF -->

            <a
                href="viewstaff.php"
                class="action-card"
            >

                <span>
                    &#128188;
                </span>

                <h3>
                    Manage Staff
                </h3>

                <p>
                    Manage ZenithBank staff records.
                </p>

            </a>



            <!-- ADMIN -->

            <a
                href="viewadmin.php"
                class="action-card"
            >

                <span>
                    &#128272;
                </span>

                <h3>
                    Manage Admin
                </h3>

                <p>
                    Manage system administrator records.
                </p>

            </a>


        </div>

    </section>


</main>



<!-- =========================================
     FOOTER
========================================= -->

<footer>

    <p>

        &copy;
        <?php echo date("Y"); ?>
        ZenithBank Banking Management System

    </p>

</footer>

<a
    href="https://wa.me/2348164770129?text=Hello%20FISolutions%2C%20I%20am%20interested%20in%20your%20projects."
    class="whatsapp-float"
    target="_blank"
    rel="noopener noreferrer"
    aria-label="Contact FISolutions on WhatsApp"
    title="Chat with us on WhatsApp"
>
    <svg viewBox="0 0 32 32" aria-hidden="true">
        <path d="M16 .5C7.45.5.5 7.45.5 16c0 2.73.72 5.41 2.08 7.76L.4 31.6l8.03-2.1A15.4 15.4 0 0 0 16 31.5c8.55 0 15.5-6.95 15.5-15.5S24.55.5 16 .5zm0 28.2c-2.38 0-4.71-.64-6.73-1.85l-.48-.28-4.77 1.25 1.27-4.65-.31-.5A12.68 12.68 0 0 1 3.1 16C3.1 8.9 8.9 3.1 16 3.1S28.9 8.9 28.9 16 23.1 28.7 16 28.7zm6.96-9.5c-.38-.19-2.25-1.11-2.6-1.24-.35-.13-.6-.19-.85.19-.25.38-.98 1.24-1.2 1.5-.22.25-.44.28-.82.09-.38-.19-1.6-.59-3.05-1.88-1.13-1.01-1.89-2.25-2.11-2.63-.22-.38-.02-.58.17-.77.17-.17.38-.44.57-.66.19-.22.25-.38.38-.63.13-.25.06-.47-.03-.66-.1-.19-.85-2.05-1.16-2.81-.3-.74-.61-.64-.85-.65h-.72c-.25 0-.66.1-1.01.47-.35.38-1.33 1.3-1.33 3.16s1.36 3.66 1.55 3.91c.19.25 2.67 4.08 6.47 5.72.9.39 1.6.62 2.15.8.9.29 1.72.25 2.37.15.72-.11 2.25-.92 2.57-1.8.32-.89.32-1.65.22-1.8-.09-.16-.34-.25-.72-.44z"/>
    </svg>
</a>
</body>

</html>