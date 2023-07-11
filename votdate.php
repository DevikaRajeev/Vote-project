$query="select * from election_event where election_title='$hid'";
			  
			  $result=mysql_query($query,$connect);
			  //echo"$query";
			  $res=mysql_fetch_array($result);
			  $title=$res['election_title'];
$date=$res['election_date'];
$candidate=$res['no_of_candidate'];
$end=$res['election_end_date'];
$today=date('Y-m-j');

if($end<$today)
{
echo"<script>alert('The $event time is Closed!!');document.location.href='candidate_home.php';</script>";
}