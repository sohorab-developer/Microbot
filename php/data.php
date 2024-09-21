<?php
while ($row = mysqli_fetch_assoc($sql)) {
    $user_id = $row['unique_id'];

    // Fetch the last message between the current user and this user
    $sql2 = "SELECT * FROM messages 
             WHERE (incoming_msg_id = {$user_id} AND outgoing_msg_id = {$outgoing_id}) 
             OR (incoming_msg_id = {$outgoing_id} AND outgoing_msg_id = {$user_id}) 
             ORDER BY msg_id DESC LIMIT 1";
    $query2 = mysqli_query($conn, $sql2);
    $row2 = mysqli_fetch_assoc($query2);

    if (mysqli_num_rows($query2) > 0) {
        $result = $row2['msg'];
    } else {
        $result = "No message available";
    }

    $output .= '<a href="microchat.php?user_id=' . $row['unique_id'] . '">
                <div class="content">
                <img src="php/image/' . $row['img'] . '" alt="" style="width: 40px; height: 40px; border-radius: 50%; object-fit: cover;">
                <div class="details">
                <span>' . $row['fname'] . " " . $row['lname'] . '</span>
                <p>' . $result . '</p>
                </div>
                </div>
                <div class="status-dot"><i class="fas fa-circle"></i></div>
                </a>';
}
?>
