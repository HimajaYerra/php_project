<?php
require '../includes/database.php';
require '../includes/dao.php';

$count_data = getTotalCustomersDataPerCountry();
$country_data = array();
$male_data = array();
$female_data = array();
$total_data = array();
foreach($count_data as $row_data):
    $country_data[] = $row_data['geography'];
    $male_data[] = $row_data['male'];
    $female_data[] = $row_data['female'];
    $total_data[] = $row_data['total'];
endforeach;

?>
<table>
                <thead>
                  <tr>
                    <th>Geography</th>
                    <th>Male</th>
                    <th>Female</th>
                    <th>Total</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($country_data as $index): ?>
                    <tr>
                        <td><?php echo $country_data[$index]; ?></td>
                        <td><?php echo $male_data[$index]; ?></td>
                        <td><?php echo $female_data[$index]; ?></td>
                        <td><?php echo $total_data[$index]; ?></td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
            </table>