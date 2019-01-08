<?php

/* index/index.html */
class __TwigTemplate_0e8adc581bee88bbcc9ff6a53cb091bfe6d6424f28131001bc5ede365383ebd2 extends Twig_Template
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

";
        // line 3
        echo twig_include($this->env, $context, "common/header.html");
        echo "

";
        // line 5
        echo twig_include($this->env, $context, "common/column.html");
        echo "


<div class=\"layui-container\">
  <div class=\"layui-row layui-col-space15\">
    <div class=\"layui-col-md8\">
      <div class=\"fly-panel\">
        <div class=\"fly-panel-title fly-filter\">
          <a>置顶</a>
         <!-- <a href=\"#signin\" class=\"layui-hide-sm layui-show-xs-block fly-right\" id=\"LAY_goSignin\" style=\"color: #FF5722;\">去签到</a>-->
        </div>
        <ul class=\"fly-list\">
          ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["topPostList"]) ? $context["topPostList"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 18
            echo "          <li>
            <a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["G"]) ? $context["G"] : null), "url", array(0 => "app/users/home", 1 => array("uid" => $this->getAttribute($context["data"], "uid", array()))), "method"), "html", null, true);
            echo "\" class=\"fly-avatar\">
              <img src=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_G"]) ? $context["_G"] : null), "ATTACHMENT_ROOT", array(), "array"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "avatar", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "username", array()), "html", null, true);
            echo "\">
            </a>
            <h2>
              <a class=\"layui-badge\">";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "cname", array()), "html", null, true);
            echo "</a>
              <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["G"]) ? $context["G"] : null), "url", array(0 => "app/detail/index", 1 => array("id" => $this->getAttribute($context["data"], "id", array()))), "method"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "title", array()), "html", null, true);
            echo "</a>
            </h2>
            <div class=\"fly-list-info\">
              <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["G"]) ? $context["G"] : null), "url", array(0 => "app/users/home", 1 => array("uid" => $this->getAttribute($context["data"], "uid", array()))), "method"), "html", null, true);
            echo "\" link>
                <cite>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "username", array()), "html", null, true);
            echo "</cite>
              <!--  <i class=\"iconfont icon-renzheng\" title=\"认证信息：XXX\"></i>
                <i class=\"layui-badge fly-badge-vip\">VIP3</i>-->
              </a>
              <span class=\"time_str\">";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "change_time", array()), "html", null, true);
            echo "</span>

              <span class=\"layui-hide-xs\" title=\"悬赏飞吻\">  <i class=\"iconfont\" title=\"人气\"></i>&nbsp;&nbsp;";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "visits_count", array()), "html", null, true);
            echo "</span>
              ";
            // line 35
            if (($this->getAttribute($context["data"], "status", array()) == 1)) {
                // line 36
                echo "              <span class=\"layui-badge fly-badge-accept layui-hide-xs\">已结</span>
              ";
            }
            // line 38
            echo "              <span class=\"fly-list-nums\"> 
                <i class=\"iconfont icon-pinglun1\" title=\"回答\"></i>  ";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "reply_count", array()), "html", null, true);
            echo "
              </span>
            </div>
            <div class=\"fly-list-badge\">
              ";
            // line 43
            if (($this->getAttribute($context["data"], "top", array()) == 1)) {
                // line 44
                echo "              <span class=\"layui-badge layui-bg-black\">置顶</span>
              ";
            }
            // line 46
            echo "              ";
            if (($this->getAttribute($context["data"], "status", array()) == 2)) {
                // line 47
                echo "               <span class=\"layui-badge layui-bg-red\">精帖</span>
               ";
            }
            // line 49
            echo "
            </div>
          </li>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "          
        </ul>
      </div>

      <div class=\"fly-panel\" style=\"margin-bottom: 0;\">
        
        <div class=\"fly-panel-title fly-filter\">
          
          <a href=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["G"]) ? $context["G"] : null), "url", array(0 => "app/search/search", 1 => array("status" => 4)), "method"), "html", null, true);
        echo "\" class=\"layui-this\" >综合</a>
          <span class=\"fly-mid\"></span>

          <a href=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["G"]) ? $context["G"] : null), "url", array(0 => "app/search/search", 1 => array("status" => 0)), "method"), "html", null, true);
        echo "\" >未结</a>
          <span class=\"fly-mid\"></span>
          
          <a href=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["G"]) ? $context["G"] : null), "url", array(0 => "app/search/search", 1 => array("status" => 1)), "method"), "html", null, true);
        echo "\" >已结</a>
          <span class=\"fly-mid\"></span>
          
          <a href=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["G"]) ? $context["G"] : null), "url", array(0 => "app/search/search", 1 => array("status" => 2)), "method"), "html", null, true);
        echo "\" >精华</a>
          <span class=\"fly-filter-right layui-hide-xs\">
            

            <a href=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["G"]) ? $context["G"] : null), "url", array(0 => "app/search/search", 1 => array("status" => (isset($context["status"]) ? $context["status"] : null), "orderBy" => "create_time")), "method"), "html", null, true);
        echo "\" ";
        if (((isset($context["orderBy"]) ? $context["orderBy"] : null) == "create_time")) {
            echo " class=\"layui-this\" ";
        }
        echo ">按最新</a>
            <span class=\"fly-mid\"></span>
            <a href=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["G"]) ? $context["G"] : null), "url", array(0 => "app/search/search", 1 => array("status" => (isset($context["status"]) ? $context["status"] : null), "orderBy" => "reply_count")), "method"), "html", null, true);
        echo "\" ";
        if (((isset($context["orderBy"]) ? $context["orderBy"] : null) == "reply_count")) {
            echo " class=\"layui-this\" ";
        }
        echo ">按热议</a>
          </span>
        </div>

        <ul class=\"fly-list\"> 
          ";
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comprehensivePostList"]) ? $context["comprehensivePostList"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            echo "         
          <li>
            <a href=\"";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["G"]) ? $context["G"] : null), "url", array(0 => "app/users/home", 1 => array("uid" => $this->getAttribute($context["data"], "uid", array()))), "method"), "html", null, true);
            echo "\" class=\"fly-avatar\">
              <img src=\"";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_G"]) ? $context["_G"] : null), "ATTACHMENT_ROOT", array(), "array"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "avatar", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "username", array()), "html", null, true);
            echo "\">
            </a>
            <h2>
              <a class=\"layui-badge\">";
            // line 87
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "cname", array()), "html", null, true);
            echo "</a>
              <a href=\"";
            // line 88
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["G"]) ? $context["G"] : null), "url", array(0 => "app/detail/index", 1 => array("id" => $this->getAttribute($context["data"], "id", array()))), "method"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "title", array()), "html", null, true);
            echo "</a>
            </h2>
            <div class=\"fly-list-info\">
              <a href=\"";
            // line 91
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["G"]) ? $context["G"] : null), "url", array(0 => "app/users/home", 1 => array("uid" => $this->getAttribute($context["data"], "uid", array()))), "method"), "html", null, true);
            echo "\" link>
                <cite>";
            // line 92
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "username", array()), "html", null, true);
            echo "</cite>
                <!--
                <i class=\"iconfont icon-renzheng\" title=\"认证信息：XXX\"></i>
                <i class=\"layui-badge fly-badge-vip\">VIP3</i>
                -->
              </a>
              <span class=\"time_str\">";
            // line 98
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "change_time", array()), "html", null, true);
            echo "</span>

              <span class=\"layui-hide-xs\" title=\"悬赏飞吻\">  <i class=\"iconfont\" title=\"人气\"></i>&nbsp;&nbsp;";
            // line 100
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "visits_count", array()), "html", null, true);
            echo "</span>
              <!--<span class=\"layui-badge fly-badge-accept layui-hide-xs\">已结</span>-->
              <span class=\"fly-list-nums\"> 
                <i class=\"iconfont icon-pinglun1\" title=\"回答\"></i> ";
            // line 103
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "reply_count", array()), "html", null, true);
            echo "
              </span>
            </div>
            <div class=\"fly-list-badge\">
              <!--<span class=\"layui-badge layui-bg-red\">精帖</span>-->
            </div>
          </li>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 111
        echo "        </ul>
        <div style=\"text-align: center\">
          <div class=\"laypage-main\">
            <a href=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["G"]) ? $context["G"] : null), "url", array(0 => "app/search/search"), "method"), "html", null, true);
        echo "\" class=\"laypage-next\">更多求解</a>
          </div>
        </div>

      </div>
    </div>
    <div class=\"layui-col-md4\">

      <!--   <div class=\"fly-panel\">
        <h3 class=\"fly-panel-title\">温馨通道</h3>
        <ul class=\"fly-panel-main fly-list-static\">
          <li>
            <a href=\"http://fly.layui.com/jie/4281/\" target=\"_blank\">layui 的 GitHub 及 Gitee (码云) 仓库，欢迎Star</a>
          </li>
          <li>
            <a href=\"http://fly.layui.com/jie/5366/\" target=\"_blank\">
              layui 常见问题的处理和实用干货集锦
            </a>
          </li>
          <li>
            <a href=\"http://fly.layui.com/jie/4281/\" target=\"_blank\">layui 的 GitHub 及 Gitee (码云) 仓库，欢迎Star</a>
          </li>
          <li>
            <a href=\"http://fly.layui.com/jie/5366/\" target=\"_blank\">
              layui 常见问题的处理和实用干货集锦
            </a>
          </li>
          <li>
            <a href=\"http://fly.layui.com/jie/4281/\" target=\"_blank\">layui 的 GitHub 及 Gitee (码云) 仓库，欢迎Star</a>
          </li>
        </ul>
      </div>


   <!--   <div class=\"fly-panel fly-signin\">
        <div class=\"fly-panel-title\">
          签到
          <i class=\"fly-mid\"></i>
          <a href=\"javascript:;\" class=\"fly-link\" id=\"LAY_signinHelp\">说明</a>
          <i class=\"fly-mid\"></i>
          <a href=\"javascript:;\" class=\"fly-link\" id=\"LAY_signinTop\">活跃榜<span class=\"layui-badge-dot\"></span></a>
          <span class=\"fly-signin-days\">已连续签到<cite>16</cite>天</span>
        </div>
        <div class=\"fly-panel-main fly-signin-main\">
          <button class=\"layui-btn layui-btn-danger\" id=\"LAY_signin\">今日签到</button>
          <span>可获得<cite>5</cite>飞吻</span>

          <!-- 已签到状态 -->
          <!--
          <button class=\"layui-btn layui-btn-disabled\">今日已签到</button>
          <span>获得了<cite>20</cite>飞吻</span>
          -->
      <!--      </div>
        </div>

        <!--     <div class=\"fly-panel fly-rank fly-rank-reply\" id=\"LAY_replyRank\">
              <h3 class=\"fly-panel-title\">回贴周榜</h3>
              <dl>
                <!--<i class=\"layui-icon fly-loading\">&#xe63d;</i>-->
      <!--    <dd>
           <a href=\"./index.php?m=app&c=users&a=home\">
             <img src=\"https://tva1.sinaimg.cn/crop.0.0.118.118.180/5db11ff4gw1e77d3nqrv8j203b03cweg.jpg\"><cite>贤心</cite><i>106次回答</i>
           </a>
         </dd>
         <dd>
           <a href=\"./index.php?m=app&c=users&a=home\">
             <img src=\"https://tva1.sinaimg.cn/crop.0.0.118.118.180/5db11ff4gw1e77d3nqrv8j203b03cweg.jpg\"><cite>贤心</cite><i>106次回答</i>
           </a>
         </dd>
         <dd>
           <a href=\"./index.php?m=app&c=users&a=home\">
             <img src=\"https://tva1.sinaimg.cn/crop.0.0.118.118.180/5db11ff4gw1e77d3nqrv8j203b03cweg.jpg\"><cite>贤心</cite><i>106次回答</i>
           </a>
         </dd>
         <dd>
           <a href=\"./index.php?m=app&c=users&a=home\">
             <img src=\"https://tva1.sinaimg.cn/crop.0.0.118.118.180/5db11ff4gw1e77d3nqrv8j203b03cweg.jpg\"><cite>贤心</cite><i>106次回答</i>
           </a>
         </dd>
         <dd>
           <a href=\"./index.php?m=app&c=users&a=home\">
             <img src=\"https://tva1.sinaimg.cn/crop.0.0.118.118.180/5db11ff4gw1e77d3nqrv8j203b03cweg.jpg\"><cite>贤心</cite><i>106次回答</i>
           </a>
         </dd>
         <dd>
           <a href=\"./index.php?m=app&c=users&a=home\">
             <img src=\"https://tva1.sinaimg.cn/crop.0.0.118.118.180/5db11ff4gw1e77d3nqrv8j203b03cweg.jpg\"><cite>贤心</cite><i>106次回答</i>
           </a>
         </dd>
         <dd>
           <a href=\"./index.php?m=app&c=users&a=home\">
             <img src=\"https://tva1.sinaimg.cn/crop.0.0.118.118.180/5db11ff4gw1e77d3nqrv8j203b03cweg.jpg\"><cite>贤心</cite><i>106次回答</i>
           </a>
         </dd>
         <dd>
           <a href=\"./index.php?m=app&c=users&a=home\">
             <img src=\"https://tva1.sinaimg.cn/crop.0.0.118.118.180/5db11ff4gw1e77d3nqrv8j203b03cweg.jpg\"><cite>贤心</cite><i>106次回答</i>
           </a>
         </dd>
         <dd>
           <a href=\"./index.php?m=app&c=users&a=home\">
             <img src=\"https://tva1.sinaimg.cn/crop.0.0.118.118.180/5db11ff4gw1e77d3nqrv8j203b03cweg.jpg\"><cite>贤心</cite><i>106次回答</i>
           </a>
         </dd>
         <dd>
           <a href=\"./index.php?m=app&c=users&a=home\">
             <img src=\"https://tva1.sinaimg.cn/crop.0.0.118.118.180/5db11ff4gw1e77d3nqrv8j203b03cweg.jpg\"><cite>贤心</cite><i>106次回答</i>
           </a>
         </dd>
         <dd>
           <a href=\"./index.php?m=app&c=users&a=home\">
             <img src=\"https://tva1.sinaimg.cn/crop.0.0.118.118.180/5db11ff4gw1e77d3nqrv8j203b03cweg.jpg\"><cite>贤心</cite><i>106次回答</i>
           </a>
         </dd>
         <dd>
           <a href=\"./index.php?m=app&c=users&a=home\">
             <img src=\"https://tva1.sinaimg.cn/crop.0.0.118.118.180/5db11ff4gw1e77d3nqrv8j203b03cweg.jpg\"><cite>贤心</cite><i>106次回答</i>
           </a>
         </dd>
       </dl>
     </div>-->

    <dl class=\"fly-panel fly-list-one\">
        <dt class=\"fly-panel-title\">一周热议</dt>
        ";
        // line 238
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["hotPostList"]) ? $context["hotPostList"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            echo " 
        <dd>
          <a href=\"";
            // line 240
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["G"]) ? $context["G"] : null), "url", array(0 => "app/detail/index", 1 => array("id" => $this->getAttribute($context["data"], "id", array()))), "method"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "title", array()), "html", null, true);
            echo "</a>
          <span><i class=\"iconfont icon-pinglun1\"></i> ";
            // line 241
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "reply_count", array()), "html", null, true);
            echo "</span>
        </dd>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 244
        echo "        

        <!-- 无数据时 -->
        <!--
        <div class=\"fly-none\">没有相关数据</div>
        -->
      </dl>

      <div class=\"fly-panel\">
        <div class=\"fly-panel-title\">
          首页广告
        </div>
        ";
        // line 256
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["firstList"]) ? $context["firstList"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 257
            echo "          ";
            if (($this->getAttribute($context["data"], "type", array()) == 1)) {
                // line 258
                echo "          <div class=\"fly-panel-main\">
            <a href=\"";
                // line 259
                echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "url_path", array()), "html", null, true);
                echo "\" target=\"_blank\" class=\"fly-zanzhu\" time-limit=\"2017.09.25-2099.01.01\" style=\"background-color: #5FB878;\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "name", array()), "html", null, true);
                echo "</a>
          </div>
          ";
            } else {
                // line 262
                echo "            <div class=\"fly-panel-main\">
              <a href=\"";
                // line 263
                echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "url_path", array()), "html", null, true);
                echo "\" target=\"_blank\" time-limit=\"2017.09.25-2099.01.01\" >
              <img src=\"";
                // line 264
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_G"]) ? $context["_G"] : null), "ATTACHMENT_ROOT", array(), "array"), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "image", array()), "html", null, true);
                echo "\" style=\"width:350px;height:60px;\" alt=\"\"/>
              </a>
            </div>
           ";
            }
            // line 268
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 269
        echo "
      </div>
      
      <div class=\"fly-panel fly-link\">
        <h3 class=\"fly-panel-title\">友情链接</h3>
        <dl class=\"fly-panel-main\">
          ";
        // line 275
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["link"]) ? $context["link"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 276
            echo "          <dd><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "url_path", array()), "html", null, true);
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "name", array()), "html", null, true);
            echo "</a><dd>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 278
        echo "
          <dd><a href=\"mailto:xianxin@layui-inc.com?subject=%E7%94%B3%E8%AF%B7Fly%E7%A4%BE%E5%8C%BA%E5%8F%8B%E9%93%BE\" class=\"fly-link\">申请友链</a><dd>
        </dl>
      </div>

    </div>
  </div>
</div>
<script>  
  layui.use(['util','jquery'], function(){
    var util = layui.util;   
    var \$ = layui.\$ //由于layer弹层依赖jQuery，所以可以直接得到
    var setTimeAgo = function(y, M, d, H, m, s){
      var str = util.timeAgo(new Date(y, M||0, d||1, H||0, m||0, s||0));
      return str
    };
    \$(function(){
      \$(\".time_str\").each(function(){
        var timestamp=\$(this).text()
        //console.log(\$(this).text())
        var date = new Date();
        date.setTime(timestamp * 1000);
        var year  = date.getFullYear(); 
        var month  = date.getMonth(); 
        var day   = date.getDate(); 
        var hour  = date.getHours(); 
        var minute = date.getMinutes(); 
        var second = date.getSeconds(); 
        var str=setTimeAgo(year,month,day,hour,minute,second);
        console.log(str)
        \$(this).html(str)
      });
    })
  });
</script>
";
        // line 313
        echo twig_include($this->env, $context, "common/footer.html");
        echo "



";
    }

    public function getTemplateName()
    {
        return "index/index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  529 => 313,  492 => 278,  481 => 276,  477 => 275,  469 => 269,  463 => 268,  454 => 264,  450 => 263,  447 => 262,  439 => 259,  436 => 258,  433 => 257,  429 => 256,  415 => 244,  406 => 241,  400 => 240,  393 => 238,  266 => 114,  261 => 111,  247 => 103,  241 => 100,  236 => 98,  227 => 92,  223 => 91,  215 => 88,  211 => 87,  201 => 84,  197 => 83,  190 => 81,  178 => 76,  169 => 74,  162 => 70,  156 => 67,  150 => 64,  144 => 61,  134 => 53,  125 => 49,  121 => 47,  118 => 46,  114 => 44,  112 => 43,  105 => 39,  102 => 38,  98 => 36,  96 => 35,  92 => 34,  87 => 32,  80 => 28,  76 => 27,  68 => 24,  64 => 23,  54 => 20,  50 => 19,  47 => 18,  43 => 17,  28 => 5,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "index/index.html", "/data/test/calfbbs/app/template/index/index.html");
    }
}
