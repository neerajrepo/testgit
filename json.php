<script type="text/javascript" src="jquery.js"></script>
<script language="javascript">
    
    var main_data={};
    main_data["date"] = "today";
    main_data["url"] = "google.com";
    main_data["extradata"] = "nothing";
    main_data["jserror"] = "jserror";
    main_data["formdata"] = "formdata";
    var myJsonString = JSON.stringify(main_data)
    alert(delta);
       
   /*
   var datamain=new Array();
    datamain[0] = "sdfsdfsd";
    datamain[1] = "url";
    datamain[2] = "extradata";
    datamain[3] = "jserror";
    datamain[4] = "formdata";
   
    var myJsonString = JSON.stringify(datamain);
    */
    
    $.ajax({
        url:"ajax.php",
        data:{"name":JSON.stringify(main_data)},
        type:"post",
        dataType: 'json',
        success:function(result,success){
            alert("success"+result);
        }
    });
 
</script>
<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
