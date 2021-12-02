<? 
session_start();
include("../include/DBConnect.php");
include("../include/Snoopy.class.php");

function send_htmlmail($fromEmail,$fromName,$toEmail,$toName,$subject,$message){
	$charset='utf-8';
	$body=iconv('utf-8','euc-kr',$message);
	$encoded_subject="=?".$charset."?B?".base64_encode($subject)."?=\n";
	$to="\"=?".$charset."?B?".base64_encode($toName)."?=\"<".$toEmail.">";
	$from="\"=?".$charset."?B?".base64_encode($fromName)."?=\"<".$fromEmail.">";
	$headers="MME-Version:1.0\n".
			"Content-Type:text/html; charset=euc-kr;format=flowed\n".
			//"To:".$to."\n".
	"From:".$from."\n".
	"Return-Path:".$from."\n".
	"um:content-classes:messge\n".
	"Content-Transfer-Encoding:8bit\n";

	$mail_sent = @mail($to, $encoded_subject,$body,$headers,'-f'.$from);

	return $mail_sent;
}

function get_code_nm($code){
	$temp = "";
	$sql_tab = "select get_code_nm('".$code."') code_nm from dual" ;
	$irs_tab = @mysql_query($sql_tab);
	$idata_tab = @mysql_fetch_array($irs_tab);
	$temp = $idata_tab["code_nm"];

	return $temp;
}
?>
<?

$idx = $_POST["idx"];
$title = $_POST["title"];
$type = $_POST["type_cd"];
$content =  $_POST["content"];
if(is_array($_POST['sec1'])){
	$sec1 = implode(",",$_POST['sec1']); //설정
	if(substr($sec1,0,1)==","){
		$sec1=substr($sec1,1,strlen($sec1));
	}
}

$company = $_POST['company'];
$homepage = $_POST["homepage"];
$name = $_POST["name"];
$position = $_POST["position"];
$tel = $_POST["tel"];
$email = $_POST["email"];

if($title == ""){
	exit;
} 


?>

<?

	$sql = "insert into mk_apply_board ( type, title, content, sec1, company, homepage, name, position, tel, email, regdate) values (";
	$sql=$sql." '".$type."', '".str_replace("'","''",$title)."', '".str_replace("'","''",$content)."', '".$sec1."', '".$company."', '".$homepage."', '".$name."', '".$position."', '".$tel."', '".$email."',  NOW())";
	$insert_sql = mysql_query($sql);
	
	
	$idx = mysql_insert_id();
	$i=0;
	
	$sql_tab = "select idx
		, title
		, content
		, company
		, name
		, homepage
		, position
		, tel
		, type
		, sec1
		, get_code_nm(type) type_nm
		, email
		, DATE_FORMAT(regdate,'%Y-%m-%d %H:%i') regdate from mk_apply_board where idx = '".$idx."' " ;
	$irs_tab = mysql_query($sql_tab);
	$idata_tab = mysql_fetch_array($irs_tab);
	
	$title = $idata_tab["title"];
	
	$fromEmail=$idata_tab["email"]; //보내는 사람
	$fromName=$idata_tab["name"];//$idata_tab["name"];
	//$toEmail="mking_admin@marketingking.co.kr";
	//$toName="허종혁"; //받는 사람
	$toEmail="marketingking@teraplanet.co.kr";
	$toName="관리자"; //받는 사람
	$subject = "[마케팅의왕-서비스상담신청]".$title;
	
	$message = "";
	//$message = "본문 :<a href='http://newsstart.co.kr/login/login.php?e_key=".base64_encode("NEWSSTART".$m_idx)."&email=".base64_encode($u_email)."' target='_parent'>클릭클릭</a>";
	$message = "	<!doctype html>\n";
	$message .= " 	<html>\n";
	$message .= " 	<head>\n";
	$message .= " 	<meta charset='utf-8'>\n";
	$message .= " 	<link href='http://newsstart.co.kr/css/style.css' rel='stylesheet' type='text/css'>\n";
	$message .= " 	</head>\n";
	$message .= " 	<style>\n";
	$message .= " 	.gray_font { color:#777777; }\n";
	$message .= " 	.red_font { color:#fa0f0f; }\n";
	$message .= " 	.blue_font { color:#7da7d9; }\n";
	$message .= " 	</style>\n";
	$message .= " 	<body style='width:800px;'>\n";
	$message .= " 	<div style='width:800px;'>\n";
	$message .= " 		마케팅의 왕 서비스 상담신청 내역에 신규 상담 요청내용이 접수되었습니다.<br>\n";
	$message .= "		관리자 사이트에 접속하셔서 신청내용을 확인해주시기 바랍니다.<br><br>\n";
	$message .= "\n";
	$message .= " <table style='width:766px; font-size:12px; ' border='0' cellspacing='0' cellpadding='0'>\n";
	$message .= " 	<tr>\n";
	$message .= " 		<td style='width:100px; border-top:2px solid black;   line-height:32px; border-left:0px; padding:0px 10px; border-bottom:1px solid #ddd; display:inline-block; height:35px; text-align:center; background-color:#f6f4f4;'>\n";
	$message .= " 			제목\n";
	$message .= " 		</td>\n";
	$message .= " 		<td colspan='3' style='width:666px; border-top:2px solid black;  line-height:32px; border-left:0px; padding:0px 10px; border-bottom:1px solid #ddd; display:inline-block; height:35px; text-align:left; '>\n";
	$message .= " 			<a href='http://marketingking.co.kr/admin/customer/apply/view.php?con_level=customer02&idx=[B_IDX]'>[TITLE]</a>\n";
	$message .= " 		</td>\n";
	$message .= " 	</tr>\n";
	$message .= " 	<tr>\n";
	$message .= " 		<td style='width:100px;  line-height:32px; border-left:0px; padding:0px 10px; border-bottom:1px solid #ddd; display:inline-block; height:35px; text-align:center; background-color:#f6f4f4;'>\n";
	$message .= " 			신청날짜\n";
	$message .= " 		</td>\n";
	$message .= " 		<td colspan='3' style='width:666px; line-height:32px; border-left:0px; padding:0px 10px; border-bottom:1px solid #ddd; display:inline-block; height:35px; text-align:left; '>\n";
	$message .= " 			[DATE]\n";
	$message .= " 		</td>\n";
	$message .= " 	</tr>\n";
	$message .= " 	<tr>\n";
	$message .= " 		<td style='width:100px;  line-height:32px; border-left:0px; padding:0px 10px; border-bottom:1px solid #ddd; display:inline-block; height:35px; text-align:center; background-color:#f6f4f4;'>\n";
	$message .= " 			회사명\n";
	$message .= " 		</td>\n";
	$message .= " 		<td style='width:271px; line-height:32px; border-left:0px; padding:0px 10px; border-bottom:1px solid #ddd; display:inline-block; height:35px; text-align:left; '>\n";
	$message .= " 			[COMPANY]\n";
	$message .= " 		</td>\n";
	$message .= " 		<td style='width:100px;  line-height:32px; border-left:0px; padding:0px 10px; border-bottom:1px solid #ddd; display:inline-block; height:35px; text-align:center; background-color:#f6f4f4;'>\n";
	$message .= " 			홈페이지 주소\n";
	$message .= " 		</td>\n";
	$message .= " 		<td style='width:271px; line-height:32px; border-left:0px; padding:0px 10px; border-bottom:1px solid #ddd; display:inline-block; height:35px; text-align:left; '>\n";
	$message .= " 			[HOMEPAGE]\n";
	$message .= " 		</td>\n";
	$message .= " 	</tr>\n";
	$message .= " 	<tr>\n";
	$message .= " 		<td style='width:100px;  line-height:32px; border-left:0px; padding:0px 10px; border-bottom:1px solid #ddd; display:inline-block; height:35px; text-align:center; background-color:#f6f4f4;'>\n";
	$message .= " 			고객명\n";
	$message .= " 		</td>\n";
	$message .= " 		<td style='width:271px; line-height:32px; border-left:0px; padding:0px 10px; border-bottom:1px solid #ddd; display:inline-block; height:35px; text-align:left; '>\n";
	$message .= " 			[NAME]\n";
	$message .= " 		</td>\n";
	$message .= " 		<td style='width:100px;  line-height:32px; border-left:0px; padding:0px 10px; border-bottom:1px solid #ddd; display:inline-block; height:35px; text-align:center; background-color:#f6f4f4;'>\n";
	$message .= " 			직급/직책\n";
	$message .= " 		</td>\n";
	$message .= " 		<td style='width:271px; line-height:32px; border-left:0px; padding:0px 10px; border-bottom:1px solid #ddd; display:inline-block; height:35px; text-align:left; '>\n";
	$message .= " 			[POSITION]\n";
	$message .= " 		</td>\n";
	$message .= " 	</tr>\n";
	$message .= " 	<tr>\n";
	$message .= " 		<td style='width:100px;  line-height:32px; border-left:0px; padding:0px 10px; border-bottom:1px solid #ddd; display:inline-block; height:35px; text-align:center; background-color:#f6f4f4;'>\n";
	$message .= " 			연락처\n";
	$message .= " 		</td>\n";
	$message .= " 		<td style='width:271px; line-height:32px; border-left:0px; padding:0px 10px; border-bottom:1px solid #ddd; display:inline-block; height:35px; text-align:left; '>\n";
	$message .= " 			[TEL]\n";
	$message .= " 		</td>\n";
	$message .= " 		<td style='width:100px;  line-height:32px; border-left:0px; padding:0px 10px; border-bottom:1px solid #ddd; display:inline-block; height:35px; text-align:center; background-color:#f6f4f4;'>\n";
	$message .= " 			이메일\n";
	$message .= " 		</td>\n";
	$message .= " 		<td style='width:271px; line-height:32px; border-left:0px; padding:0px 10px; border-bottom:1px solid #ddd; display:inline-block; height:35px; text-align:left; '>\n";
	$message .= " 			[EMAIL]\n";
	$message .= " 		</td>\n";
	$message .= " 	</tr>\n";
	$message .= " 	<tr>\n";
	$message .= " 		<td style='width:100px;  line-height:32px; border-left:0px; padding:0px 10px; border-bottom:1px solid #ddd; display:inline-block; height:35px; text-align:center; background-color:#f6f4f4;'>\n";
	$message .= " 			상담구분\n";
	$message .= " 		</td>\n";
	$message .= " 		<td colspan='3' style='width:666px; line-height:32px; border-left:0px; padding:0px 10px; border-bottom:1px solid #ddd; display:inline-block; height:35px; text-align:left; '>\n";
	$message .= " 			[SEC1]\n";
	$message .= " 		</td>\n";
	$message .= " 	</tr>\n";
	$message .= " 	<tr>\n";
	$message .= " 		<td style='width:100px;  line-height:32px; border-left:0px; padding:0px 10px; border-bottom:1px solid #ddd; display:inline-block; height:35px; text-align:center; background-color:#f6f4f4;'>\n";
	$message .= " 			내용\n";
	$message .= " 		</td>\n";
	$message .= " 		<td colspan='3' style='width:666px; line-height:32px; border-left:0px; padding:0px 10px; border-bottom:1px solid #ddd; display:inline-block; height:35px; text-align:left; '>\n";
	$message .= " 			[CONTENT]\n";
	$message .= " 		</td>\n";
	$message .= " 	</tr>\n";
	$message .= " </table>\n";
	$message .= " 	</div>\n";
	$message .= " 	</body>\n";
	$message .= " 	</html>";
	
	$arryTemp1 = explode(',',$idata_tab["sec1"]) ;
	$sec1 = "";
	for($i = 0 ; $i<count($arryTemp1) ; $i++){
		if($i!=0){
			echo ",&nbsp;&nbsp;";
		}
		$sec1 .= get_code_nm($arryTemp1[$i]);
	}
	
	$message = str_replace('[NAME]',$idata_tab["name"],$message);
	$message = str_replace('[DATE]',$idata_tab["regdate"],$message);
	$message = str_replace('[TITLE]',$idata_tab["title"],$message);
	$message = str_replace('[CONTENT]',$idata_tab["content"],$message);
	$message = str_replace('[COMPANY]',$idata_tab["company"],$message);
	$message = str_replace('[HOMEPAGE]',$idata_tab["homepage"],$message);
	$message = str_replace('[POSITION]',$idata_tab["position"],$message);
	$message = str_replace('[TEL]',$idata_tab["tel"],$message);
	$message = str_replace('[EMAIL]',$idata_tab["email"],$message);
	$message = str_replace('[SEC1]',$sec1,$message);
	$message = str_replace('[B_IDX]',$idx,$message);
	
	$result=send_htmlmail($fromEmail,$fromName,$toEmail,$toName,$subject,$message);
	
	//SMS 보내기 
	$sql = "select idx, tp,c1,c2 from mk_sitesetting where tp='phone'";
	$select_sql = mysql_query($sql);
	$data = mysql_fetch_array($select_sql);
	$ph_num = $data["c2"];
	//$ph_num="01093068899";
	$msg = "[서비스 상담신청]마케팅의 왕 이메일 상담신청이 접수되었습니다.";
	$snoopy = new Snoopy;
	//$tran_callback = "01074498480"; 장본부장님
	$tran_callback = "024666402"; //이본부장님
	
	$guest_phone = str_replace("-","",$tel);
	
	if(mb_strlen($guest_phone)>11){
		exit;
	}
	
	//$msg .=  " [".$guest_phone."]";01074498480
	$temp_msg = $msg;
	$tran_phone = $ph_num;
	//$tran_date = urlencode($_POST["tran_date"]); //예약전송 일시(생략시 즉시전송)
	$tran_msg = urlencode($temp_msg); //전송 메시지
	$guest_no = "127801";
	$guest_key = "D97BBAB608342A8095A0999E609FF1CD";
	
	
	
	$cmd = "SendSms";
	$method = "GET";
	
	$url = "http://www.nesolution.com/service/sms.aspx?cmd=$cmd&method=$method&";
	$url = $url."guest_no=$guest_no&guest_key=$guest_key&tran_phone=$tran_phone&";
	$url = $url."tran_callback=$tran_callback&tran_date=$tran_date&tran_msg=$tran_msg";
	
	$snoopy->fetchtext($url);
	
	// 출력 페이지가 euc-kr 일때
	//$send_result = $snoopy->results;
	
	// 출력 페이지가 utf-8 일때
	
	$send_result = iconv('EUC-KR', 'UTF-8', $snoopy->results);
	
	$REMOTE_ADDR = $_SERVER["REMOTE_ADDR"];
	if($send_result=="OK"){
		$regDate = date("Y-m-d H:i:s");
		$sql="insert into mk_sms (msg, admin_p, guest_p, regDate, ip, route) values ('".$msg."','".$tran_phone."','".$guest_phone."','".$regDate."' , '".$REMOTE_ADDR."' ,'A')";
		$inser_sql=mysql_query($sql);
	}
	//SMS 보내기 끝
?>
<!-- 전환페이지 설정 --><script type="text/javascript" src="http://wcs.naver.net/wcslog.js"></script> <script type="text/javascript"> var _nasa={};_nasa["cnv"] = wcs.cnv("4","10"); // 전환유형, 전환가치 설정해야함. 설치매뉴얼 참고</script> <!-- 공통 적용 스크립트 , 모든 페이지에 노출되도록 설치. 단 전환페이지 설정값보다 항상 하단에 위치해야함 --> <script type="text/javascript" src="http://wcs.naver.net/wcslog.js"> </script> <script type="text/javascript"> if (!wcs_add) var wcs_add={};wcs_add["wa"] = "s_585af9d45eb4";if (!_nasa) var _nasa={};wcs.inflow();wcs_do(_nasa);</script>
<form name='movepage' method='post' action="/customer/apply?result=success">
<input type="hidden" name="idx" value="<?=$idx?>">
</form>
<script>
document.movepage.submit();
</script>
</body>
</html>
