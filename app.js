"use strict"

$(document).ready(()=>{

    const table = $("#data_table").DataTable({
        dom: 'Bfrltip' ,//b-button, f-filtering,r-processing display elements,t-table,i-table info,p-page content
        buttons: [
            
        ]

    });

    $('#edit-modal').dialog({
                    autoOpen: false,
                    position: {
                        my: "center",
                        at: "center"
                    }
                });

                // Add event listener to edit buttons
                $('.edit-button').on('click', function() {
                    var row = $(this).closest('tr');
                    var customer_id = row.find('td:eq(0)').text();
                    var surname = row.find('td:eq(1)').text();
                    var credit_score = row.find('td:eq(2)').text();
                    var is_active = row.find('td:eq(3)').text();
                    var exited = row.find('td:eq(4)').text();
  
                    // Fill input fields in the pop-up with the row values
                    $('#customer_id-input').val(customer_id);
                    $('#surname-input').val(surname);
                    $('#credit_score-input').val(credit_score);
                    $('#is_active-input').val(is_active);
                    $('#exited-input').val(exited);

                    // Open the pop-up
                    $('#edit-modal').dialog('open');
                });

                // Add event listener to save button in the pop-up
                $('#save-btn').on('click', function() {
                    // Get the new values
                    var newCustomerId = $('#customer_id-input').val();
                    var newSurname = $('#surname-input').val();
                    var newCreditScore = $('#credit_score-input').val();
                    var newIsActive = $('#is_active-input').val();
                    var newExited = $('#exited-input').val();


                    // Update the cells in the table with the new values

                    // Close the pop-up
                    $('#edit-modal').hide();    
                });

    //$("#data_table tbody").on('click','td',function(){
    //    var data = table.row($(this).parents('tr')).data();

    //    if(table.cell(this).index().column==5){
    //        alert("Edit");
    //    }
    //    if(table.cell(this).index().column==6){
    //        alert("Delete");
    //    }
    //    console.log(data);
    //})

   
    
})

