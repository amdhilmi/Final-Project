<?php
include('koneksi.php');  // Include database connection

// Check if the 'id' and 'status' are passed via URL
if (isset($_GET['id']) && isset($_GET['status'])) {
    $id = $_GET['id'];  // Get the ticket ID
    $status = $_GET['status'];  // Get the status to change to (available or unavailable)

    // Validate that the status is one of the expected values (available, unavailable)
    if ($status == 'available' || $status == 'unavailable') {
        // Update the status in the database
        $query = "UPDATE ticket SET status = ? WHERE id = ?";
        $stmt = mysqli_prepare($koneksi, $query);

        // Bind parameters to the query
        mysqli_stmt_bind_param($stmt, 'si', $status, $id);

        // Execute the query
        if (mysqli_stmt_execute($stmt)) {
            // Redirect back to the results page (hasil.php)
            header('Location: hasil.php');  // Or redirect to the page where the ticket list is displayed
            exit();  // Ensure no further code is executed
        } else {
            echo "Error updating status: " . mysqli_error($koneksi);
        }
    } else {
        echo "Invalid status.";
    }
} else {
    echo "Invalid request.";
}
?>
