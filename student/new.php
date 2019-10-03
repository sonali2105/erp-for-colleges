<tr>
                    <th scope="row">
                      <div class="media align-items-center">
                        <div >
                          <span >Sub1</span>
                        </div>
                    </div>
                    </th>
                    <td>
                      32
                    </td>
                    <td>
                      <span>
                        20 
                      </span>
                    </td>
</tr>

Notice: Undefined variable: info in C:\xampp\htdocs\pro\student\timetablestudent.php on line 17


href="../student/timetablestudent.php?adm_no='<?php echo $_SESSION['adm_no']; ?>'">


<script>
function sem1(adm_no)
{
	var req=new XMLHttpRequest();
	req.open("get","resultphp.php?sem='1'&adm_no="+adm_no,true);
	req.send();
	req.onreadystatechange=function() {
            if (this.readyState == 4 && this.status == 200)
			{
				document.getElementById("sem1").innerHTML=req.responseText;
				
			}
	};
}
function sem2(adm_no)
{
	var req=new XMLHttpRequest();
	req.open("get","resultphp.php?sem='2'&adm_no="+adm_no,true);
	req.send();
	req.onreadystatechange=function() {
            if (this.readyState == 4 && this.status == 200)
			{
				document.getElementById("sem2").innerHTML=req.responseText;
				
			}
	};
}
</script>
