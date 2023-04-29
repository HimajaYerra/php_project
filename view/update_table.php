<?php 
require '../includes/dao.php';
require '../includes/database.php';
                    $hi = "hhhh";
                        echo $hi;
                            if(! (isset($_POST['customer_id-input'])==NULL)){
                                echo "here";
                                $newCustomerId = filter_input(INPUT_POST, "customer_id-input", FILTER_VALIDATE_INT);
                                
                                $newSurname = filter_input(INPUT_POST, "surname-input");
                                echo $newSurname;
                                $newCreditScore = filter_input(INPUT_POST, "credit_score-input");
                                $newIsActive = filter_input(INPUT_POST, "is_active-input");
                                $newExited = filter_input(INPUT_POST, "exited-input");
                                if (updateTableRow($newCustomerId, $newSurname, $newCreditScore, $newIsActive, $newExited) == 1) {
                                        include "../view/customer_data.php";                                } else {
                                    echo '<script>alert("Update failed!")</script>';
                                }
                            }
                            ?>