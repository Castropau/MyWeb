<?php
if (isset($_POST["emp_id"])) {
    $output = '';
    $connect = mysqli_connect("localhost", "root", "", "bago");
    $query = "SELECT * FROM users WHERE id = '" . $_POST["emp_id"] . "'";
    $result = mysqli_query($connect, $query);

    $output .= '
    <div class="modal-content esports-modal">
        <div class="modal-header esports-modal-header">
            <h5 class="modal-title esports-modal-title">Player Details</h5>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
            <table class="table table-bordered esports-table">
    ';

    while ($row = mysqli_fetch_array($result)) {
        include "connect.php";

        $id = $row['id'];

        // Fetch user info from database
        $sql = "SELECT image FROM users WHERE id = '$id'";
        $image_result = mysqli_query($conn, $sql);
        if ($image_row = mysqli_fetch_assoc($image_result)) {
            if (!empty($image_row['image'])) {
                $image = 'uploads/' . $image_row['image'];
            } else {
                $image = 'logopic.jpg';
            }
        } else {
            $image = 'logopic.jpg';
        }

        $output .= '
           <tr>
               <td colspan="2">
                   <div class="profile-container">
                       <img class="profile-picture" src="' . $image . '" alt="' . $row["image"] . '">
                   </div>
                   <br>
               </td>
           </tr>
           <tr>
               <td width="30%" class="esports-label">Name</td>
               <td width="70%" class="esports-value">' . $row["firstname"] . ' ' . $row["lastname"];

        if ($row["verify"] == "verified") {
            $output .= ' <iconify-icon style="color: #33ccff;" icon="heroicons-solid:badge-check"></iconify-icon>';
        }

        $output .= '</td>
           </tr>
           <tr>
               <td width="30%" class="esports-label">Bio</td>
               <td width="70%" class="esports-value">' . $row["bio"] . '</td>
           </tr>
           <tr>
               <td width="30%" class="esports-label">About</td>
               <td width="70%" class="esports-value">' . $row["about"] . '</td>
           </tr>
           <tr>
               <td width="30%" class="esports-label">IGN</td>
               <td width="70%" class="esports-value">' . $row["ign"] . '</td>
           </tr>
           <tr>
               <td width="30%" class="esports-label">Status</td>
               <td width="70%" class="esports-value">';

        $status = $row["statuss"];
        if ($status == "Online") {
            $output .= 'Online <span style="color: green;">&#9679;</span>'; // Green dot
        } elseif ($status == "Offline") {
            if (!empty($row["last_access"])) {
                $lastActive = intval($row["last_access"]); // Convert the last access string to an integer
                $currentTime = time(); // Get the current timestamp
                $timeDiff = $currentTime - $lastActive; // Calculate the time difference in seconds

                $timeUnits = array(
                    "year" => 31536000, // 60 * 60 * 24 * 365
                    "month" => 2592000, // 60 * 60 * 24 * 30
                    "week" => 604800, // 60 * 60 * 24 * 7
                    "day" => 86400, // 60 * 60 * 24
                    "hour" => 3600, // 60 * 60
                    "minute" => 60,
                );

                $output .= 'Offline (Last active: ';

                foreach ($timeUnits as $unit => $seconds) {
                    if ($timeDiff >= $seconds) {
                        $value = floor($timeDiff / $seconds);
                        $plural = ($value > 1) ? 's' : '';
                        $output .= $value . ' ' . $unit . $plural . ' ago';
                        break;
                    }
                }

                $output .= ') <span style="color: grey;">&#9679;</span>';
            } else {
                $output .= 'Not yet logged in'; // Set the status as "Not yet logged in" if the last access data is not available
            }
        } else {
            $output .= 'Not yet logged in'; // Set the status as "Not yet logged in" if the status is neither "Online" nor "Offline"
        }

        $output .= '</td>
                   </tr>';

    }

    $output .= "</table></div></div>";
    echo $output;
}
?>

<style>
    /* CSS styles for eSports-themed modal */
.esports-modal {
    background-color: #000;
    color: #fff;
}

.esports-modal-header {
    background-color: #ff9900;
    border-bottom: none;
}

.esports-modal-title {
    color: #fff;
}

.esports-table {
    background-color: #1a1a1a;
}

.esports-label {
    color: #ff9900;
}

.esports-value {
    color: #fff;
}
.profile-container {
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
    }

    .profile-picture {
  width: 200px;
  height: 200px;
  border-radius: 50%;
  margin-right: 20px;
}
</style>
<?php
include "connect.php";

$id = 'id';

// Fetch user info from database
$sql = "SELECT image FROM users WHERE id = '$id'";
$result = mysqli_query($conn, $sql);
if ($row = mysqli_fetch_assoc($result)) {
    $image = 'uploads/' . $row['image']; // Replace with the actual path or URL of the image
}
?>
<script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
