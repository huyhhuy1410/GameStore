
   
    function KiemTra() {
var ten=document.getElementById("input-fullname");
var dn=document.getElementById("input-username");         
var mail=document.getElementById("input-email");  
var dt=document.getElementById("input-telephone");  
var mk=document.getElementById("input-password");  
var mk1=document.getElementById("input-confirm");   
var re=/^[0-9]{10}$/; 
var re1=/^[a-zA-Z]+$/;
var re2=/^([a-zA-Z])+([a-zA-Z0-9])+$/;
if (re1.test(ten.value)==false)
{
    alert("Tên không hợp lệ.");
    return false;
} 
if (dn.value != "" && re2.test(dn.value)==false)
{
    alert("Tên dăng nhập đứng đầu là chữ cái, không chứa kí tự đặc biệt.");
    return false;
}
if (dt.value != "" && re.test(dt.value)==false)
{
    alert("Số điện thoại không hợp lệ. \nExample: 0123456789");
    return false;
}
if ((mk.value && ten.value && mail.value && dn.value && dt.value && mk1.value)=="")
{
    alert("Vui lòng nhập đầy đủ thông tin.");
    return false;
}
if(mk1.value != mk.value)
{
    alert("Nhập lại mật khẩu sai.");
    return false;
}
if(mk.value.length < 6)
{
    alert("Mật khẩu phải từ 6 kí tự.");
    return false;
}
alert("Đăng ký thành công !");
            window.open("dangnhap.html");
            return true;
    }