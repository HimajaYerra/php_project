"use strict"

$(document).ready(()=>{

    const table = $("#data_table").DataTable({
        dom: 'Bfrltip' ,//b-button, f-filtering,r-processing display elements,t-table,i-table info,p-page content
        buttons: [
            
        ]

    });

    $("#data_table tbody").on('click','td',function(){
        var data = table.row($(this).parents('tr')).data();

        if(table.cell(this).index().column==5){
            alert("Edit");
        }
        if(table.cell(this).index().column==6){
            alert("Delete");
        }
        console.log(data);
    })

   
    
})

