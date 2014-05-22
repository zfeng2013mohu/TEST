function sub(){
    var ou = document.loginForm.username;
    var op = document.loginForm.password;
    var oc = document.loginForm.verify;
    if( (ou.value == '') || (op.value == '') || (oc.value == '')){
        alert('用户名或者密码或者验证码不能为空');
    }else{
        document.loginForm.submit();
    }
}

function register(){
    var op1 = document.registerForm.pass1;
    var op2 = document.registerForm.pass2;
    var ou = document.registerForm.username;
    var ot = document.registerForm.telphone;

    if( (op1.value!=null) && (op1.value == op2.value)){
        if((ou.value != null) && (ot.value != null) && (op1.value != null) && (op2.value != null)){
            document.registerForm.submit();
        }else{
            alert('请填写完整的用户信息！');
        }
    }else{
       alert('两次输入密码不一致，请重新输入！');
    }
}