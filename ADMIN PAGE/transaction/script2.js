function edit_row(no)
    { document.getElementById("edit_button"+no).style.display="none";
    document.getElementById("save_button"+no).style.display="block";

    var num=document.getElementById("num_row"+no);

    var transaction=document.getElementById("transaction_row"+no);

    var transID=document.getElementById("transID_row"+no);

    var transtype=document.getElementById("transtype_row"+no);

    var start=document.getElementById("start_row"+no);

    var end=document.getElementById("end_row"+no);

        var num_data=num.innerHTML;

        var transaction_data=transaction.innerHTML;

        var transID_data=transID.innerHTML;  
       
        var transtype_data=transtype.innerHTML;  
       
        var start_data=start.innerHTML;  
       
        var end_data=end.innerHTML;  
        
        num.innerHTML="<input type='text' id='num_text"+no+"' value='"+num_data+"'>"; 
       
        transaction.innerHTML="<input type='text' id='transaction_text"+no+"' value='"+transaction_data+"'>"; 
       
        transID.innerHTML="<input type='text' id='transID_text"+no+"' value='"+transID_data+"'>";
       
        transtype.innerHTML="<input type='text' id='transtype_text"+no+"' value='"+transtype_data+"'>";
       
        start.innerHTML="<input type='text' id='start_text"+no+"' value='"+start_data+"'>";
       
         end.innerHTML="<input type='text' id='end_text"+no+"' value='"+end_data+"'>";
}

function save_row(no) {
            
    var num_val=document.getElementById("num_text"+no).value;
            
    var transaction_val=document.getElementById("transaction_text"+no).value;
            
    var transID_val=document.getElementById("transID_text"+no).value;
    var transtype_val=document.getElementById("transtype_text"+no).value;
    var start_val=document.getElementById("start_text"+no).value;
    var end_val=document.getElementById("end_text"+no).value;

            document.getElementById("num_row"+no).innerHTML=num_val;
            document.getElementById("transaction_row"+no).innerHTML=transaction_val;
            document.getElementById("transID_row"+no).innerHTML=transID_val;
            document.getElementById("transtype_row"+no).innerHTML=transtype_val;
            document.getElementById("start_row"+no).innerHTML=start_val;
            document.getElementById("end_row"+no).innerHTML=end_val;
            document.getElementById("edit_button"+no).style.display="block";
            document.getElementById("save_button"+no).style.display="none"; }


    function delete_row(no) { document.getElementById("row"+no+"").outerHTML=""; }

    function add_row()  {
    
            var new_num=document.getElementById("new_num").value; 

            var new_transaction=document.getElementById("new_transaction").value;

            var new_transID=document.getElementById("new_transID").value;

            var new_transtype=document.getElementById("new_transtype").value;

            var new_start=document.getElementById("new_start").value;

            var new_end=document.getElementById("new_end").value;
            
            var table=document.getElementById("data_table"); 
            var table_len=(table.rows.length)-1;

            
            table.insertRow(table_len).outerHTML=
            "<tr id='row"+table_len+"'> <td id='num_row"+table_len+"'>" +new_num+ 
            "</td> <td id='transaction_row"+table_len+"'>" +new_transaction+ 
            "</td> <td id='transID_row"+table_len+"'>" +new_transID+ 
            "</td> <td id='transtype_row"+table_len+"'>" +new_transtype+ 
            "</td> <td id='start_row"+table_len+"'>" +new_start+ 
            "</td> <td id='end_row"+table_len+"'>" +new_end+ 
            "</td> <td><input type='button' id='edit_button"+ table_len+ 
            "' value='Edit'class='edit' onclick='edit_row("+table_len+")'> <input type='button' id='save_button"+table_len+"' value='Save' class='save' onclick='save_row("+table_len+")'> <input type='button' value='Delete' class='delete' onclick='delete_row("+table_len+")'></td> </tr>";
            document.getElementById("new_num").value="";
            document.getElementById("new_transaction").value="";
            document.getElementById("new_transID").value=""; 
            document.getElementById("new_transtype").value="";
            document.getElementById("new_start").value="";
            document.getElementById("new_end").value=""; } 