<?php

/* login/login.html */
class __TwigTemplate_4d9ef7459d29a648c552bb2e8597fb980e3356b31bf8faf63c441e11426f050e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\"/>
    <title>后台登录</title>
    <meta name=\"author\" content=\"DeathGhost\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_G"]) ? $context["_G"] : null), "APP", array(), "array"), "html", null, true);
        echo "/resource/css/style.css\" tppabs=\"css/style.css\" />
    <style>
        body{height:100%;background:#16a085;overflow:hidden;}
        canvas{z-index:-1;position:absolute;}
    </style>
    <script src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_G"]) ? $context["_G"] : null), "APP", array(), "array"), "html", null, true);
        echo "/resource/js/jquery.min.js\"></script>
    <script src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_G"]) ? $context["_G"] : null), "APP", array(), "array"), "html", null, true);
        echo "/resource/layui/layer/layer.js\"></script>

    <!-- <script src=\"http://www.jq22.com/demo/jQuery-VerificationCode20160718/js/Particleground.js\" tppabs=\"js/Particleground.js\"></script>-->
    <script>

        \$(document).ready(function() {

            //粒子背景特效
            /*  \$('body').particleground({
                 dotColor: '#5cbdaa',
                 lineColor: '#5cbdaa'
             });*/
            //验证码
            createCode();

        });
    </script>
</head>
<body>

<dl class=\"admin_login\">
    <dt>
        <strong>calfbbs后台管理</strong>
        <em>Calfbbs Management </em>
    </dt>


    <dd class=\"user_icon\">
        <input type=\"username\" name=\"username\" placeholder=\"账号\" class=\"login_txtbx\"/>
    </dd>
    <dd class=\"pwd_icon\">
        <input type=\"password\" name=\"password\" placeholder=\"密码\" class=\"login_txtbx\"/>
    </dd>
    <dd class=\"val_icon\">
        <div class=\"checkcode\">
            <input type=\"text\" id=\"J_codetext\" placeholder=\"验证码\" maxlength=\"4\" class=\"login_txtbx\">
            <canvas class=\"J_codeimg\" id=\"myCanvas\" onclick=\"createCode()\">对不起，您的浏览器不支持canvas，请下载最新版浏览器!</canvas>
        </div>
        <input type=\"button\" value=\"换个验证码\" class=\"ver_btn\" onClick=\"createCode();\">
    </dd>
    <dd>
        <input type=\"submit\" value=\"立即登陆\" class=\"submit_btn\" onClick=\"validate();return false;\"/>
    </dd>

    <dd>
        <p><a href=\"http://www.calfbb.com\" target=\"_blank\">© 2018-2028 calfbbs 版权所有</a></p>

    </dd>
</dl>
<script>
    function showCheck(a){
        var c = document.getElementById(\"myCanvas\");
        var ctx = c.getContext(\"2d\");
        ctx.clearRect(0,0,1000,1000);
        ctx.font = \"80px 'Microsoft Yahei'\";
        ctx.fillText(a,0,100);
        ctx.fillStyle = \"black\";
    }
    var code ;
    function createCode(){
        code = \"\";
        var codeLength = 4;
        var selectChar = new Array(1,2,3,4,5,6,7,8,9,'a','b','c','d','e','f','g','h','j','k','l','m','n','p','q','r','s','t','u','v','w','x','y','z','A','B','C','D','E','F','G','H','J','K','L','M','N','P','Q','R','S','T','U','V','W','X','Y','Z');
        for(var i=0;i<codeLength;i++) {
            var charIndex = Math.floor(Math.random()*60);
            code +=selectChar[charIndex];
        }
        if(code.length != codeLength){
            createCode();
        }
        showCheck(code);
    }

    function validate () {
        var inputCode = document.getElementById(\"J_codetext\").value.toUpperCase();
        var codeToUp=code.toUpperCase();
        if(inputCode.length <=0) {
            document.getElementById(\"J_codetext\").setAttribute(\"placeholder\",\"验证码错误\");
            createCode();
            return false;
        }
        else if(inputCode != codeToUp ){
            document.getElementById(\"J_codetext\").value=\"\";
            document.getElementById(\"J_codetext\").setAttribute(\"placeholder\",\"验证码错误\");
            createCode();
            return false;
        }
        else {
            //   window.open(document.getElementById(\"J_down\").getAttribute(\"data-link\"));
            document.getElementById(\"J_codetext\").value=\"\";

            login();
        }

    }

    function login(){
        var username=\$('input[name=username]').val();
        var password=\$('input[name=password]').val();

        if(!username){
            layer.msg('用户名不能为空');
            return false;
        }

        if(!password){
            layer.msg('密码不能为空');
            return false;
        }

        \$.ajax({
            url:\"";
        // line 125
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["G"]) ? $context["G"] : null), "url", array(0 => "admin/login/login"), "method"), "html", null, true);
        echo "\",//当前ajax请求的地址
            type:'post',//请求的方式
            async:true,//是否异步  默认为异步
            data:{username:username,password:password,type:\"username\"},//当前ajax请求的参数  
            dataType:\"json\",
            success: function(data){//发送成功时的代码执行

                if(data.code==2001){
                    layer.msg(\"登陆失败:\"+data.data);
                    return false;
                }
                if(data.code==1001){
                    layer.msg(data.data+\"正在跳转........\");

                    setTimeout(function(){
                        window.location.href=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["G"]) ? $context["G"] : null), "url", array(0 => "admin/index/index"), "method"), "html", null, true);
        echo "\";
                    }, 3000);

                }else{
                    layer.msg(\"登陆失败，请重新尝试登陆\");

                }

                createCode();

            },
            error:function(){//失败时的代码执行
                layer.msg(\"登陆失败，请重新尝试登陆\");
                createCode();
            }

        })

    }

</script>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "login/login.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 140,  154 => 125,  40 => 14,  36 => 13,  28 => 8,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "login/login.html", "/data/test/calfbbs/addons/admin/template/login/login.html");
    }
}
