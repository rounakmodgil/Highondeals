<?php 
include('conn_cm.php');
?>
<html>
<head>
<title>HOME</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-select.css">
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="style_cm.css" type="text/css" rel="stylesheet">
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Resale Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<script  src="j1.js"></script>
</head>
<body>
<div class="lang">

</div>
<div class="logo">
<a href="index.php"><img src="images/logo9new.png" height="100px" width="100%"/></a>
</div>
<div class="menu">
<ul>
<li style="none"><a href="index.php">Home</a></li>
<li><a href="contactcm.php">Contact Us</a></li>
<li><a href="queries.php">Any Queries</a></li>
</ul>
</div>

<div class="login">
<?php
session_start();
  if(isset($_SESSION['username'])){
    $username=$_SESSION['username'];
	?>
	<div class="lgn">
	<div class="lgn_pic"><img src="images/account.png" height="40px" width="98%"/></div>
	<?php
    echo ($username);
	?>
	<br/>
	<a href="logout.php"> Logout</a></div>
	<div class="lgn_below"><div class="lgn_pic"><img src="images/cartimg.png" height="40px" width="98%"/></div>
    <a href="cart.php?cart"> Cart</a></div>
    <?php
  }
  else{
	  ?>
	<input type="button" value="Login" id="login_b" onclick="location.href='login.php'"/><?php
  }
?>
</div>
<div class="button-add">
<button onclick=window.location.href='freead.php'>Submit a Free Ad</button>
</div>
<div class="blank-after">
</div>
<div class="header-img">
<img src="images/hero.jpg" height="440px" width="100%" />
<div class="centered">
<p id="sell">Sell or Advertise anything online with classyMARKET</p>
<p id="join" >Join the millions who buy and sell from each other
everyday in local communities around the country</p>
</div>

<div class="search-header">
	<div class="maptypes">
	<form method="post" action="">
		<select  name="splace" placeholder=" All India" id="stext_one"  >
		<option>Select product name</option>
		<?php 
		include('conn_cm.php');
		$res=mysqli_query($x,"select * from product");
		while($row=mysqli_fetch_array($res))
		{
			echo "<option value='$row[0]'>".$row[1]."</option>";
		}
		?>
		
		</select>
	</div>
	<div class="search_box">
	<input type="submit" value="Search" name="submit" id="ssubmit-button">
</div>
</div>

			</div></form>
				<?php 
				if(isset($_POST['submit']))
				{
					?>
					<div class="maincntr_imge">
					<form method="post" action="">
					<div class="main_line">
					<p>Products</p>
					</div>
					<?php
					$splace=$_POST['splace'];
					
					    $f=mysqli_query($x,"select * from product where id='$splace' ");
						  while( $ff= mysqli_fetch_array($f))
							{
								
							  ?>
							  
								
										<form method="post" action="">
										<div class="prod_image" >
										<div class="title_name" ><p><input type="hidden" value="<?php  echo $ff[1]; ?>"  name="pdname"/> <?php  echo $ff[1]; ?></p></div>
										<div class="img_space_p" onclick=window.location.href='viewproduct.php?pid=<?php echo $ff[2] ?>'><?php echo "<img src='admin/images/$ff[image]' height='150px' width='100%'  />";?></div>
										<div class="title_price" ><p>Rs.<input type="hidden" value="<?php  echo $ff[3]; ?>" name="pdcost"/> <?php  echo $ff[3]; ?></p> </div>
										<div class="quant" ><input type="text" name="quantity" value="1" size="2" /><input type="submit" value="BUY" name="buy" class="btnAddcart" /></div>
										</div>
								<?php
							}	
				
?>
</form>
</div>
				
					<?php
				}
				
				else
				{
					?>
					<div class="images_category" id="chng">
					<?php
					$f=mysqli_query($x,'select * from category_table ');
					while( $ff= mysqli_fetch_array($f))
					{
					?>
						<div class="img_particular">
						<?php 
						echo "<a href='viewproduct.php?cid=$ff[0]'>"."<img src='images/$ff[image]' height='100px' width='80%'  />"."</a>";  ?>
						<div class="name_category">
						<p>
							<?php echo "$ff[category_name]";?>
						</p>
						</div>
						</div>
						<?php
					}
					
				}
					?>
					</div>
					<?php
if(isset($_REQUEST['buy']))
{

  if(isset($_SESSION['username']))
  {
   
    $pdname=$_POST['pdname'];
    $pdcost=$_POST['pdcost'];
    $quantity=$_POST['quantity'];
    $d=mysqli_query($x,"insert into orders (usr_name,item,price,quantity) values('$username','$pdname','$pdcost','$quantity')") or die(mysqli_error($x));

}
else
{
?>
<script>
  alert("Login first to buy Items");
  window.location.href='login.php';
</script>
<?php
}
}
?>
<div class="blank_after_search">
</div>
<div class="trending_ads">
<p>Trending Adds</p></div>
<div class="slid_adds">
<script>(function(h,f,c,j,d,l,k){
new(function(){});var e={Bd:function(a){return-c.cos(a*c.PI)/2+.5},Ad:function(a){return a},Wd:function(a){return-a*(a-2)}};
var b=new function(){var g=this,Bb=/\S+/g,G=1,db=2,hb=3,gb=4,lb=5,H,r=0,i=0,s=0,W=0,z=0,J=navigator,pb=J.appName,o=J.userAgent,p=parseFloat;
function zb(){if(!H){H={He:"ontouchstart"in h||"createTouch"in f};
var a;
if(J.pointerEnabled||(a=J.msPointerEnabled))H.cd=a?"msTouchAction":"touchAction"}return H}
function v(j){if(!r){r=-1;if(pb=="Microsoft Internet Explorer"&&!!h.attachEvent&&!!h.ActiveXObject){var e=o.indexOf("MSIE");r=G;s=p(o.substring(e+5,o.indexOf(";",e)));/*@cc_on W=@_jscript_version@*/;i=f.documentMode||s}else if(pb=="Netscape"&&!!h.addEventListener){var d=o.indexOf("Firefox"),b=o.indexOf("Safari"),g=o.indexOf("Chrome"),c=o.indexOf("AppleWebKit");if(d>=0){r=db;i=p(o.substring(d+8))}else if(b>=0){var k=o.substring(0,b).lastIndexOf("/");r=g>=0?gb:hb;i=p(o.substring(k+1,b))}else{var a=/Trident\/.*rv:([0-9]{1,}[\.0-9]{0,})/i.exec(o);if(a){r=G;i=s=p(a[1])}}if(c>=0)z=p(o.substring(c+12))}else{var a=/(opera)(?:.*version|)[ \/]([\w.]+)/i.exec(o);if(a){r=lb;i=p(a[2])}}}return j==r}function q(){return v(G)}function R(){return q()&&(i<6||f.compatMode=="BackCompat")}function fb(){return v(hb)}function kb(){return v(lb)}function wb(){return fb()&&z>534&&z<535}function K(){v();return z>537||i>42||r==G&&i>=11}function P(){return q()&&i<9}function xb(a){var b,c;return function(f){if(!b){b=d;var e=a.substr(0,1).toUpperCase()+a.substr(1);n([a].concat(["WebKit","ms","Moz","O","webkit"]),function(g,d){var b=a;if(d)b=g+e;if(f.style[b]!=k)return c=b})}return c}}function vb(b){var a;return function(c){a=a||xb(b)(c)||b;return a}}var L=vb("transform");function ob(a){return{}.toString.call(a)}var F;function Hb(){if(!F){F={};n(["Boolean","Number","String","Function","Array","Date","RegExp","Object"],function(a){F["[object "+a+"]"]=a.toLowerCase()})}return F}function n(b,d){var a,c;if(ob(b)=="[object Array]"){for(a=0;a<b.length;a++)if(c=d(b[a],a,b))return c}else for(a in b)if(c=d(b[a],a,b))return c}function C(a){return a==j?String(a):Hb()[ob(a)]||"object"}function mb(a){for(var b in a)return d}function A(a){try{return C(a)=="object"&&!a.nodeType&&a!=a.window&&(!a.constructor||{}.hasOwnProperty.call(a.constructor.prototype,"isPrototypeOf"))}catch(b){}}function u(a,b){return{x:a,y:b}}function sb(b,a){setTimeout(b,a||0)}function I(b,d,c){var a=!b||b=="inherit"?"":b;n(d,function(c){var b=c.exec(a);if(b){var d=a.substr(0,b.index),e=a.substr(b.index+b[0].length+1,a.length-1);a=d+e}});a=c+(!a.indexOf(" ")?"":" ")+a;return a}function ub(b,a){if(i<9)b.style.filter=a}g.Me=zb;g.dd=q;g.Ge=fb;g.ye=K;g.Jc=P;xb("transform");g.uc=function(){return i};g.sc=sb;function Z(a){a.constructor===Z.caller&&a.rc&&a.rc.apply(a,Z.caller.arguments)}g.rc=Z;g.db=function(a){if(g.Yd(a))a=f.getElementById(a);return a};function t(a){return a||h.event}g.tc=t;g.Nb=function(b){b=t(b);var a=b.target||b.srcElement||f;if(a.nodeType==3)a=g.pc(a);return a};g.Ic=function(a){a=t(a);return{x:a.pageX||a.clientX||0,y:a.pageY||a.clientY||0}};function D(c,d,a){if(a!==k)c.style[d]=a==k?"":a;else{var b=c.currentStyle||c.style;a=b[d];if(a==""&&h.getComputedStyle){b=c.ownerDocument.defaultView.getComputedStyle(c,j);b&&(a=b.getPropertyValue(d)||b[d])}return a}}function bb(b,c,a,d){if(a!==k){if(a==j)a="";else d&&(a+="px");D(b,c,a)}else return p(D(b,c))}function m(c,a){var d=a?bb:D,b;if(a&4)b=vb(c);return function(e,f){return d(e,b?b(e):c,f,a&2)}}function Eb(b){if(q()&&s<9){var a=/opacity=([^)]*)/.exec(b.style.filter||"");return a?p(a[1])/100:1}else return p(b.style.opacity||"1")}function Gb(b,a,f){if(q()&&s<9){var h=b.style.filter||"",i=new RegExp(/[\s]*alpha\([^\)]*\)/g),e=c.round(100*a),d="";if(e<100||f)d="alpha(opacity="+e+") ";var g=I(h,[i],d);ub(b,g)}else b.style.opacity=a==1?"":c.round(a*100)/100}var M={S:["rotate"],M:["rotateX"],Q:["rotateY"],Db:["skewX"],wb:["skewY"]};if(!K())M=B(M,{m:["scaleX",2],n:["scaleY",2],O:["translateZ",1]});function N(d,a){var c="";if(a){if(q()&&i&&i<10){delete a.M;delete a.Q;delete a.O}b.e(a,function(d,b){var a=M[b];if(a){var e=a[1]||0;if(O[b]!=d)c+=" "+a[0]+"("+d+(["deg","px",""])[e]+")"}});if(K()){if(a.Z||a.ab||a.O)c+=" translate3d("+(a.Z||0)+"px,"+(a.ab||0)+"px,"+(a.O||0)+"px)";if(a.m==k)a.m=1;if(a.n==k)a.n=1;if(a.m!=1||a.n!=1)c+=" scale3d("+a.m+", "+a.n+", 1)"}}d.style[L(d)]=c}g.vc=m("transformOrigin",4);g.ie=m("backfaceVisibility",4);g.ue=m("transformStyle",4);g.Re=m("perspective",6);g.te=m("perspectiveOrigin",4);g.se=function(a,b){if(q()&&s<9||s<10&&R())a.style.zoom=b==1?"":b;else{var c=L(a),f="scale("+b+")",e=a.style[c],g=new RegExp(/[\s]*scale\(.*?\)/g),d=I(e,[g],f);a.style[c]=d}};g.Xb=function(b,a){return function(c){c=t(c);var e=c.type,d=c.relatedTarget||(e=="mouseout"?c.toElement:c.fromElement);(!d||d!==a&&!g.oe(a,d))&&b(c)}};g.a=function(a,d,b,c){a=g.db(a);if(a.addEventListener){d=="mousewheel"&&a.addEventListener("DOMMouseScroll",b,c);a.addEventListener(d,b,c)}else if(a.attachEvent){a.attachEvent("on"+d,b);c&&a.setCapture&&a.setCapture()}};g.A=function(a,c,d,b){a=g.db(a);if(a.removeEventListener){c=="mousewheel"&&a.removeEventListener("DOMMouseScroll",d,b);a.removeEventListener(c,d,b)}else if(a.detachEvent){a.detachEvent("on"+c,d);b&&a.releaseCapture&&a.releaseCapture()}};g.zb=function(a){a=t(a);a.preventDefault&&a.preventDefault();a.cancel=d;a.returnValue=l};g.je=function(a){a=t(a);a.stopPropagation&&a.stopPropagation();a.cancelBubble=d};g.C=function(d,c){var a=[].slice.call(arguments,2),b=function(){var b=a.concat([].slice.call(arguments,0));return c.apply(d,b)};return b};g.he=function(a,b){if(b==k)return a.textContent||a.innerText;var c=f.createTextNode(b);g.ic(a);a.appendChild(c)};g.Bb=function(d,c){for(var b=[],a=d.firstChild;a;a=a.nextSibling)(c||a.nodeType==1)&&b.push(a);return b};function nb(a,c,e,b){b=b||"u";for(a=a?a.firstChild:j;a;a=a.nextSibling)if(a.nodeType==1){if(V(a,b)==c)return a;if(!e){var d=nb(a,c,e,b);if(d)return d}}}g.z=nb;function T(a,d,f,b){b=b||"u";var c=[];for(a=a?a.firstChild:j;a;a=a.nextSibling)if(a.nodeType==1){V(a,b)==d&&c.push(a);if(!f){var e=T(a,d,f,b);if(e.length)c=c.concat(e)}}return c}function ib(a,c,d){for(a=a?a.firstChild:j;a;a=a.nextSibling)if(a.nodeType==1){if(a.tagName==c)return a;if(!d){var b=ib(a,c,d);if(b)return b}}}g.Ne=ib;g.Fe=function(b,a){return b.getElementsByTagName(a)};function B(){var e=arguments,d,c,b,a,g=1&e[0],f=1+g;d=e[f-1]||{};for(;f<e.length;f++)if(c=e[f])for(b in c){a=c[b];if(a!==k){a=c[b];var h=d[b];d[b]=g&&(A(h)||A(a))?B(g,{},h,a):a}}return d}g.Y=B;function ab(f,g){var d={},c,a,b;for(c in f){a=f[c];b=g[c];if(a!==b){var e;if(A(a)&&A(b)){a=ab(a,b);e=!mb(a)}!e&&(d[c]=a)}}return d}g.Gc=function(a){return C(a)=="function"};g.Yd=function(a){return C(a)=="string"};g.ze=function(a){return!isNaN(p(a))&&isFinite(a)};g.e=n;function S(a){return f.createElement(a)}g.Ab=function(){return S("DIV")};g.zd=function(){return S("SPAN")};g.Hc=function(){};function X(b,c,a){if(a==k)return b.getAttribute(c);b.setAttribute(c,a)}function V(a,b){return X(a,b)||X(a,"data-"+b)}g.o=X;g.g=V;function x(b,a){if(a==k)return b.className;b.className=a}g.Fc=x;function rb(b){var a={};n(b,function(b){a[b]=b});return a}function tb(b,a){return b.match(a||Bb)}function Q(b,a){return rb(tb(b||"",a))}g.rd=tb;function cb(b,c){var a="";n(c,function(c){a&&(a+=b);a+=c});return a}function E(a,c,b){x(a,cb(" ",B(ab(Q(x(a)),Q(c)),Q(b))))}g.pc=function(a){return a.parentNode};g.L=function(a){g.H(a,"none")};g.G=function(a,b){g.H(a,b?"none":"")};g.qd=function(b,a){b.removeAttribute(a)};g.nd=function(){return q()&&i<10};g.td=function(d,a){if(a)d.style.clip="rect("+c.round(a.j||a.p||0)+"px "+c.round(a.q)+"px "+c.round(a.r)+"px "+c.round(a.k||a.s||0)+"px)";else if(a!==k){var g=d.style.cssText,f=[new RegExp(/[\s]*clip: rect\(.*?\)[;]?/i),new RegExp(/[\s]*cliptop: .*?[;]?/i),new RegExp(/[\s]*clipright: .*?[;]?/i),new RegExp(/[\s]*clipbottom: .*?[;]?/i),new RegExp(/[\s]*clipleft: .*?[;]?/i)],e=I(g,f,"");b.Eb(d,e)}};g.F=function(){return+new Date};g.E=function(b,a){b.appendChild(a)};g.vb=function(b,a,c){(c||a.parentNode).insertBefore(b,a)};g.Cb=function(b,a){a=a||b.parentNode;a&&a.removeChild(b)};g.kd=function(a,b){n(a,function(a){g.Cb(a,b)})};g.ic=function(a){g.kd(g.Bb(a,d),a)};g.ld=function(a,b){var c=g.pc(a);b&1&&g.D(a,(g.i(c)-g.i(a))/2);b&2&&g.B(a,(g.l(c)-g.l(a))/2)};g.wd=function(b,a){return parseInt(b,a||10)};g.Td=p;g.oe=function(b,a){var c=f.body;while(a&&b!==a&&c!==a)try{a=a.parentNode}catch(d){return l}return b===a};function Y(d,c,b){var a=d.cloneNode(!c);!b&&g.qd(a,"id");return a}g.hb=Y;g.jb=function(e,f){var a=new Image;function b(e,d){g.A(a,"load",b);g.A(a,"abort",c);g.A(a,"error",c);f&&f(a,d)}function c(a){b(a,d)}if(kb()&&i<11.6||!e)b(!e);else{g.a(a,"load",b);g.a(a,"abort",c);g.a(a,"error",c);a.src=e}};g.Sd=function(d,a,e){var c=d.length+1;function b(b){c--;if(a&&b&&b.src==a.src)a=b;!c&&e&&e(a)}n(d,function(a){g.jb(a.src,b)});b()};g.vd=function(a,g,i,h){if(h)a=Y(a);var c=T(a,g);if(!c.length)c=b.Fe(a,g);for(var f=c.length-1;f>-1;f--){var d=c[f],e=Y(i);x(e,x(d));b.Eb(e,d.style.cssText);b.vb(e,d);b.Cb(d)}return a};function Ib(a){var l=this,p="",r=["av","pv","ds","dn"],e=[],q,j=0,h=0,d=0;function i(){E(a,q,e[d||j||h&2||h]);b.K(a,"pointer-events",d?"none":"")}function c(){j=0;i();g.A(f,"mouseup",c);g.A(f,"touchend",c);g.A(f,"touchcancel",c)}function o(a){if(d)g.zb(a);else{j=4;i();g.a(f,"mouseup",c);g.a(f,"touchend",c);g.a(f,"touchcancel",c)}}l.Rd=function(a){if(a===k)return h;h=a&2||a&1;i()};l.Ac=function(a){if(a===k)return!d;d=a?0:3;i()};l.bb=a=g.db(a);var m=b.rd(x(a));if(m)p=m.shift();n(r,function(a){e.push(p+a)});q=cb(" ",e);e.unshift("");g.a(a,"mousedown",o);g.a(a,"touchstart",o)}g.Kb=function(a){return new Ib(a)};g.K=D;g.Fb=m("overflow");g.B=m("top",2);g.D=m("left",2);g.i=m("width",2);g.l=m("height",2);g.Od=m("marginLeft",2);g.Nd=m("marginTop",2);g.u=m("position");g.H=m("display");g.v=m("zIndex",1);g.Jb=function(b,a,c){if(a!=k)Gb(b,a,c);else return Eb(b)};g.Eb=function(a,b){if(b!=k)a.style.cssText=b;else return a.style.cssText};var U={lb:g.Jb,j:g.B,k:g.D,yb:g.i,xb:g.l,nb:g.u,af:g.H,gb:g.v};function w(f,l){var e=P(),b=K(),d=wb(),h=L(f);function i(b,d,a){var e=b.X(u(-d/2,-a/2)),f=b.X(u(d/2,-a/2)),g=b.X(u(d/2,a/2)),h=b.X(u(-d/2,a/2));b.X(u(300,300));return u(c.min(e.x,f.x,g.x,h.x)+d/2,c.min(e.y,f.y,g.y,h.y)+a/2)}function a(d,a){a=a||{};var f=a.O||0,l=(a.M||0)%360,m=(a.Q||0)%360,o=(a.S||0)%360,p=a.Ze;if(e){f=0;l=0;m=0;p=0}var c=new Db(a.Z,a.ab,f);c.M(l);c.Q(m);c.md(o);c.xd(a.Db,a.wb);c.bc(a.m,a.n,p);if(b){c.pb(a.s,a.p);d.style[h]=c.yd()}else if(!W||W<9){var j="";if(o||a.m!=k&&a.m!=1||a.n!=k&&a.n!=1){var n=i(c,a.W,a.V);g.Nd(d,n.y);g.Od(d,n.x);j=c.Dd()}var r=d.style.filter,s=new RegExp(/[\s]*progid:DXImageTransform\.Microsoft\.Matrix\([^\)]*\)/g),q=I(r,[s],j);ub(d,q)}}w=function(e,c){c=c||{};var h=c.s,i=c.p,f;n(U,function(a,b){f=c[b];f!==k&&a(e,f)});g.td(e,c.c);if(!b){h!=k&&g.D(e,c.ad+h);i!=k&&g.B(e,c.Zc+i)}if(c.Ed)if(d)sb(g.C(j,N,e,c));else a(e,c)};g.ub=N;if(d)g.ub=w;if(e)g.ub=a;else if(!b)a=N;g.P=w;w(f,l)}g.ub=w;g.P=w;function Db(i,l,p){var d=this,b=[1,0,0,0,0,1,0,0,0,0,1,0,i||0,l||0,p||0,1],h=c.sin,g=c.cos,m=c.tan;function f(a){return a*c.PI/180}function o(a,b){return{x:a,y:b}}function n(c,e,l,m,o,r,t,u,w,z,A,C,E,b,f,k,a,g,i,n,p,q,s,v,x,y,B,D,F,d,h,j){return[c*a+e*p+l*x+m*F,c*g+e*q+l*y+m*d,c*i+e*s+l*B+m*h,c*n+e*v+l*D+m*j,o*a+r*p+t*x+u*F,o*g+r*q+t*y+u*d,o*i+r*s+t*B+u*h,o*n+r*v+t*D+u*j,w*a+z*p+A*x+C*F,w*g+z*q+A*y+C*d,w*i+z*s+A*B+C*h,w*n+z*v+A*D+C*j,E*a+b*p+f*x+k*F,E*g+b*q+f*y+k*d,E*i+b*s+f*B+k*h,E*n+b*v+f*D+k*j]}function e(c,a){return n.apply(j,(a||b).concat(c))}d.bc=function(a,c,d){if(a==k)a=1;if(c==k)c=1;if(d==k)d=1;if(a!=1||c!=1||d!=1)b=e([a,0,0,0,0,c,0,0,0,0,d,0,0,0,0,1])};d.pb=function(a,c,d){b[12]+=a||0;b[13]+=c||0;b[14]+=d||0};d.M=function(c){if(c){a=f(c);var d=g(a),i=h(a);b=e([1,0,0,0,0,d,i,0,0,-i,d,0,0,0,0,1])}};d.Q=function(c){if(c){a=f(c);var d=g(a),i=h(a);b=e([d,0,-i,0,0,1,0,0,i,0,d,0,0,0,0,1])}};d.md=function(c){if(c){a=f(c);var d=g(a),i=h(a);b=e([d,i,0,0,-i,d,0,0,0,0,1,0,0,0,0,1])}};d.xd=function(a,c){if(a||c){i=f(a);l=f(c);b=e([1,m(l),0,0,m(i),1,0,0,0,0,1,0,0,0,0,1])}};d.X=function(c){var a=e(b,[1,0,0,0,0,1,0,0,0,0,1,0,c.x,c.y,0,1]);return o(a[12],a[13])};d.yd=function(){return"matrix3d("+b.join(",")+")"};d.Dd=function(){return"progid:DXImageTransform.Microsoft.Matrix(M11="+b[0]+", M12="+b[4]+", M21="+b[1]+", M22="+b[5]+", SizingMethod='auto expand')"}}new function(){var a=this;function b(d,g){for(var j=d[0].length,i=d.length,h=g[0].length,f=[],c=0;c<i;c++)for(var k=f[c]=[],b=0;b<h;b++){for(var e=0,a=0;a<j;a++)e+=d[c][a]*g[a][b];k[b]=e}return f}a.m=function(b,c){return a.Wc(b,c,0)};a.n=function(b,c){return a.Wc(b,0,c)};a.Wc=function(a,c,d){return b(a,[[c,0],[0,d]])};a.X=function(d,c){var a=b(d,[[c.x],[c.y]]);return u(a[0][0],a[1][0])}};var O={ad:0,Zc:0,s:0,p:0,U:1,m:1,n:1,S:0,M:0,Q:0,Z:0,ab:0,O:0,Db:0,wb:0};g.Id=function(a){var c=a||{};if(a)if(b.Gc(a))c={Tb:c};else if(b.Gc(a.c))c.c={Tb:a.c};return c};g.Jd=function(l,m,w,n,y,z,o){var a=m;if(l){a={};for(var g in m){var A=z[g]||1,v=y[g]||[0,1],f=(w-v[0])/v[1];f=c.min(c.max(f,0),1);f=f*A;var u=c.floor(f);if(f!=u)f-=u;var h=n.Tb||e.Bd,i,B=l[g],q=m[g];if(b.ze(q)){h=n[g]||h;var x=h(f);i=B+q*x}else{i=b.Y({tb:{}},l[g]);b.e(q.tb||q,function(d,a){if(n.c)h=n.c[a]||n.c.Tb||h;var c=h(f),b=d*c;i.tb[a]=b;i[a]+=b})}a[g]=i}var t=b.e(m,function(b,a){return O[a]!=k});t&&b.e(O,function(c,b){if(a[b]==k&&l[b]!==k)a[b]=l[b]});if(t){if(a.U)a.m=a.n=a.U;a.W=o.W;a.V=o.V;a.Ed=d}}if(m.c&&o.pb){var p=a.c.tb,s=(p.j||0)+(p.r||0),r=(p.k||0)+(p.q||0);a.k=(a.k||0)+r;a.j=(a.j||0)+s;a.c.k-=r;a.c.q-=r;a.c.j-=s;a.c.r-=s}if(a.c&&b.nd()&&!a.c.j&&!a.c.k&&a.c.q==o.W&&a.c.r==o.V)a.c=j;return a}};function n(){var a=this,d=[];function i(a,b){d.push({Rb:a,Pb:b})}function g(a,c){b.e(d,function(b,e){b.Rb==a&&b.Pb===c&&d.splice(e,1)})}a.mb=a.addEventListener=i;a.removeEventListener=g;a.f=function(a){var c=[].slice.call(arguments,1);b.e(d,function(b){b.Rb==a&&b.Pb.apply(h,c)})}}var m=function(z,C,i,J,M,L){z=z||0;var a=this,q,n,o,u,A=0,G,H,F,B,y=0,g=0,m=0,D,k,f,e,p,w=[],x;function O(a){f+=a;e+=a;k+=a;g+=a;m+=a;y+=a}function t(o){var h=o;if(p&&(h>=e||h<=f))h=((h-f)%p+p)%p+f;if(!D||u||g!=h){var j=c.min(h,e);j=c.max(j,f);if(!D||u||j!=m){if(L){var l=(j-k)/(C||1);if(i.Ud)l=1-l;var n=b.Jd(M,L,l,G,F,H,i);if(x)b.e(n,function(b,a){x[a]&&x[a](J,b)});else b.P(J,n)}a.Zb(m-k,j-k);m=j;b.e(w,function(b,c){var a=o<g?w[w.length-c-1]:b;a.J(m-y)});var r=g,q=m;g=h;D=d;a.sb(r,q)}}}function E(a,b,d){b&&a.mc(e);if(!d){f=c.min(f,a.ed()+y);e=c.max(e,a.nc()+y)}w.push(a)}var r=h.requestAnimationFrame||h.webkitRequestAnimationFrame||h.mozRequestAnimationFrame||h.msRequestAnimationFrame;if(b.Ge()&&b.uc()<7)r=j;r=r||function(a){b.sc(a,i.hd)};function I(){if(q){var d=b.F(),e=c.min(d-A,i.Mc),a=g+e*o;A=d;if(a*o>=n*o)a=n;t(a);if(!u&&a*o>=n*o)K(B);else r(I)}}function s(h,i,j){if(!q){q=d;u=j;B=i;h=c.max(h,f);h=c.min(h,e);n=h;o=n<g?-1:1;a.Nc();A=b.F();r(I)}}function K(b){if(q){u=q=B=l;a.Pc();b&&b()}}a.Lc=function(a,b,c){s(a?g+a:e,b,c)};a.Uc=s;a.cb=K;a.sd=function(a){s(a)};a.N=function(){return g};a.zc=function(){return n};a.eb=function(){return m};a.J=t;a.pb=function(a){t(g+a)};a.Yc=function(){return q};a.Kd=function(a){p=a};a.mc=O;a.Rc=function(a,b){E(a,0,b)};a.Ob=function(a){E(a,1)};a.ed=function(){return f};a.nc=function(){return e};a.sb=a.Nc=a.Pc=a.Zb=b.Hc;a.Yb=b.F();i=b.Y({hd:16,Mc:50},i);p=i.bd;x=i.Cd;f=k=z;e=z+C;H=i.Fd||{};F=i.Ld||{};G=b.Id(i.kb)};new(function(){});var i=function(p,fc){var g=this;function Bc(){var a=this;m.call(a,-1e8,2e8);a.fe=function(){var b=a.eb(),d=c.floor(b),f=t(d),e=b-c.floor(b);return{R:f,pe:d,nb:e}};a.sb=function(b,a){var e=c.floor(a);if(e!=a&&a>b)e++;Ub(e,d);g.f(i.re,t(a),t(b),a,b)}}function Ac(){var a=this;m.call(a,0,0,{bd:r});b.e(C,function(b){D&1&&b.Kd(r);a.Ob(b);b.mc(ib/bc)})}function zc(){var a=this,b=Tb.bb;m.call(a,-1,2,{kb:e.Ad,Cd:{nb:Zb},bd:r},b,{nb:1},{nb:-2});a.oc=b}function nc(o,n){var b=this,e,f,h,k,c;m.call(b,-1e8,2e8,{Mc:100});b.Nc=function(){M=d;R=j;g.f(i.qe,t(w.N()),w.N())};b.Pc=function(){M=l;k=l;var a=w.fe();g.f(i.ne,t(w.N()),w.N());!a.nb&&Dc(a.pe,s)};b.sb=function(i,g){var b;if(k)b=c;else{b=f;if(h){var d=g/h;b=a.me(d)*(f-e)+e}}w.J(b)};b.qb=function(a,d,c,g){e=a;f=d;h=c;w.J(a);b.J(0);b.Uc(c,g)};b.ke=function(a){k=d;c=a;b.Lc(a,j,d)};b.ge=function(a){c=a};w=new Bc;w.Rc(o);w.Rc(n)}function pc(){var c=this,a=Xb();b.v(a,0);b.K(a,"pointerEvents","none");c.bb=a;c.rb=function(){b.L(a);b.ic(a)}}function xc(o,f){var e=this,q,L,v,k,y=[],x,B,W,G,Q,F,h,w,p;m.call(e,-u,u+1,{});function E(a){q&&q.Sc();T(o,a,0);F=d;q=new I.I(o,I,b.Td(b.g(o,"idle"))||lc);q.J(0)}function Z(){q.Yb<I.Yb&&E()}function M(p,r,o){if(!G){G=d;if(k&&o){var h=o.width,c=o.height,n=h,m=c;if(h&&c&&a.fb){if(a.fb&3&&(!(a.fb&4)||h>K||c>J)){var j=l,q=K/J*c/h;if(a.fb&1)j=q>1;else if(a.fb&2)j=q<1;n=j?h*J/c:K;m=j?J:c*K/h}b.i(k,n);b.l(k,m);b.B(k,(J-m)/2);b.D(k,(K-n)/2)}b.u(k,"absolute");g.f(i.be,f)}}b.L(r);p&&p(e)}function Y(b,c,d,g){if(g==R&&s==f&&N)if(!Cc){var a=t(b);A.Be(a,f,c,e,d);c.ae();U.mc(a-U.ed()-1);U.J(a);z.qb(b,b,0)}}function cb(b){if(b==R&&s==f){if(!h){var a=j;if(A)if(A.R==f)a=A.Qe();else A.rb();Z();h=new vc(o,f,a,q);h.Vc(p)}!h.Yc()&&h.Mb()}}function S(d,g,l){if(d==f){if(d!=g)C[g]&&C[g].Zd();else!l&&h&&h.we();p&&p.Ac();var m=R=b.F();e.jb(b.C(j,cb,m))}else{var k=c.min(f,d),i=c.max(f,d),o=c.min(i-k,k+r-i),n=u+a.ve-1;(!Q||o<=n)&&e.jb()}}function db(){if(s==f&&h){h.cb();p&&p.xe();p&&p.Pe();h.Tc()}}function eb(){s==f&&h&&h.cb()}function ab(a){!P&&g.f(i.Oe,f,a)}function O(){p=w.pInstance;h&&h.Vc(p)}e.jb=function(c,a){a=a||v;if(y.length&&!G){b.G(a);if(!W){W=d;g.f(i.Le,f);b.e(y,function(a){if(!b.o(a,"src")){a.src=b.g(a,"src2");b.H(a,a["display-origin"])}})}b.Sd(y,k,b.C(j,M,c,a))}else M(c,a)};e.Ke=function(){var h=f;if(a.kc<0)h-=r;var d=h+a.kc*tc;if(D&2)d=t(d);if(!(D&1))d=c.max(0,c.min(d,r-u));if(d!=f){if(A){var e=A.ee(r);if(e){var i=R=b.F(),g=C[t(d)];return g.jb(b.C(j,Y,d,g,e,i),v)}}bb(d)}};e.jc=function(){S(f,f,d)};e.Zd=function(){p&&p.xe();p&&p.Pe();e.id();h&&h.Je();h=j;E()};e.ae=function(){b.L(o)};e.id=function(){b.G(o)};e.Ie=function(){p&&p.Ac()};function T(a,c,e){if(b.o(a,"jssor-slider"))return;if(!F){if(a.tagName=="IMG"){y.push(a);if(!b.o(a,"src")){Q=d;a["display-origin"]=b.H(a);b.L(a)}}b.Jc()&&b.v(a,(b.v(a)||0)+1)}var f=b.Bb(a);b.e(f,function(f){var h=f.tagName,i=b.g(f,"u");if(i=="player"&&!w){w=f;if(w.pInstance)O();else b.a(w,"dataavailable",O)}if(i=="caption"){if(c){b.vc(f,b.g(f,"to"));b.ie(f,b.g(f,"bf"));b.g(f,"3d")&&b.ue(f,"preserve-3d")}else if(!b.dd()){var g=b.hb(f,l,d);b.vb(g,f,a);b.Cb(f,a);f=g;c=d}}else if(!F&&!e&&!k){if(h=="A"){if(b.g(f,"u")=="image")k=b.Ne(f,"IMG");else k=b.z(f,"image",d);if(k){x=f;b.H(x,"block");b.P(x,V);B=b.hb(x,d);b.u(x,"relative");b.Jb(B,0);b.K(B,"backgroundColor","#000")}}else if(h=="IMG"&&b.g(f,"u")=="image")k=f;if(k){k.border=0;b.P(k,V)}}T(f,c,e+1)})}e.Zb=function(c,b){var a=u-b;Zb(L,a)};e.R=f;n.call(e);b.Re(o,b.g(o,"p"));b.te(o,b.g(o,"po"));var H=b.z(o,"thumb",d);if(H){b.hb(H);b.L(H)}b.G(o);v=b.hb(fb);b.v(v,1e3);b.a(o,"click",ab);E(d);e.Ce=k;e.Oc=B;e.oc=L=o;b.E(L,v);g.mb(203,S);g.mb(28,eb);g.mb(24,db)}function vc(y,f,p,q){var a=this,n=0,u=0,h,j,e,c,k,t,r,o=C[f];m.call(a,0,0);function v(){b.ic(L);cc&&k&&o.Oc&&b.E(L,o.Oc);b.G(L,!k&&o.Ce)}function w(){a.Mb()}function x(b){r=b;a.cb();a.Mb()}a.Mb=function(){var b=a.eb();if(!B&&!M&&!r&&s==f){if(!b){if(h&&!k){k=d;a.Tc(d);g.f(i.Ee,f,n,u,h,c)}v()}var l,p=i.Qc;if(b!=c)if(b==e)l=c;else if(b==j)l=e;else if(!b)l=j;else l=a.zc();g.f(p,f,b,n,j,e,c);var m=N&&(!E||F);if(b==c)(e!=c&&!(E&12)||m)&&o.Ke();else(m||b!=e)&&a.Uc(l,w)}};a.we=function(){e==c&&e==a.eb()&&a.J(j)};a.Je=function(){A&&A.R==f&&A.rb();var b=a.eb();b<c&&g.f(i.Qc,f,-b-1,n,j,e,c)};a.Tc=function(a){p&&b.Fb(jb,a&&p.qc.Se?"":"hidden")};a.Zb=function(b,a){if(k&&a>=h){k=l;v();o.id();A.rb();g.f(i.De,f,n,u,h,c)}g.f(i.Ae,f,a,n,j,e,c)};a.Vc=function(a){if(a&&!t){t=a;a.mb($JssorPlayer$.Qd,x)}};p&&a.Ob(p);h=a.nc();a.Ob(q);j=h+q.fd;e=h+q.gd;c=a.nc()}function Kb(a,c,d){b.D(a,c);b.B(a,d)}function Zb(c,b){var a=x>0?x:eb,d=zb*b*(a&1),e=Ab*b*(a>>1&1);Kb(c,d,e)}function Pb(){pb=M;Ib=z.zc();G=w.N()}function gc(){Pb();if(B||!F&&E&12){z.cb();g.f(i.Xd)}}function ec(f){if(!B&&(F||!(E&12))&&!z.Yc()){var d=w.N(),b=c.ceil(G);if(f&&c.abs(H)>=a.Kc){b=c.ceil(d);b+=hb}if(!(D&1))b=c.min(r-u,c.max(b,0));var e=c.abs(b-d);e=1-c.pow(1-e,5);if(!P&&pb)z.sd(Ib);else if(d==b){sb.Ie();sb.jc()}else z.qb(d,b,e*Vb)}}function Hb(a){!b.g(b.Nb(a),"nodrag")&&b.zb(a)}function rc(a){Yb(a,1)}function Yb(a,c){a=b.tc(a);var k=b.Nb(a);if(!O&&!b.g(k,"nodrag")&&sc()&&(!c||a.touches.length==1)){B=d;yb=l;R=j;b.a(f,c?"touchmove":"mousemove",Bb);b.F();P=0;gc();if(!pb)x=0;if(c){var h=a.touches[0];ub=h.clientX;vb=h.clientY}else{var e=b.Ic(a);ub=e.x;vb=e.y}H=0;gb=0;hb=0;g.f(i.ce,t(G),G,a)}}function Bb(e){if(B){e=b.tc(e);var f;if(e.type!="mousemove"){var l=e.touches[0];f={x:l.clientX,y:l.clientY}}else f=b.Ic(e);if(f){var j=f.x-ub,k=f.y-vb;if(c.floor(G)!=G)x=x||eb&O;if((j||k)&&!x){if(O==3)if(c.abs(k)>c.abs(j))x=2;else x=1;else x=O;if(mb&&x==1&&c.abs(k)-c.abs(j)>3)yb=d}if(x){var a=k,i=Ab;if(x==1){a=j;i=zb}if(!(D&1)){if(a>0){var g=i*s,h=a-g;if(h>0)a=g+c.sqrt(h)*5}if(a<0){var g=i*(r-u-s),h=-a-g;if(h>0)a=-g-c.sqrt(h)*5}}if(H-gb<-2)hb=0;else if(H-gb>2)hb=-1;gb=H;H=a;rb=G-H/i/(Y||1);if(H&&x&&!yb){b.zb(e);if(!M)z.ke(rb);else z.ge(rb)}}}}}function ab(){qc();if(B){B=l;b.F();b.A(f,"mousemove",Bb);b.A(f,"touchmove",Bb);P=H;z.cb();var a=w.N();g.f(i.de,t(a),a,t(G),G);E&12&&Pb();ec(d)}}function jc(c){if(P){b.je(c);var a=b.Nb(c);while(a&&v!==a){a.tagName=="A"&&b.zb(c);try{a=a.parentNode}catch(d){break}}}}function Jb(a){C[s];s=t(a);sb=C[s];Ub(a);return s}function Dc(a,b){x=0;Jb(a);g.f(i.le,t(a),b)}function Ub(a,c){wb=a;b.e(S,function(b){b.gc(t(a),a,c)})}function sc(){var b=i.yc||0,a=X;if(mb)a&1&&(a&=1);i.yc|=a;return O=a&~b}function qc(){if(O){i.yc&=~X;O=0}}function Xb(){var a=b.Ab();b.P(a,V);b.u(a,"absolute");return a}function t(a){return(a%r+r)%r}function kc(b,d){if(d)if(!D){b=c.min(c.max(b+wb,0),r-u);d=l}else if(D&2){b=t(b+wb);d=l}bb(b,a.Gb,d)}function xb(){b.e(S,function(a){a.Ub(a.Hb.Ue<=F)})}function hc(){if(!F){F=1;xb();if(!B){E&12&&ec();E&3&&C[s].jc()}}}function Ec(){if(F){F=0;xb();B||!(E&12)||gc()}}function ic(){V={yb:K,xb:J,j:0,k:0};b.e(T,function(a){b.P(a,V);b.u(a,"absolute");b.Fb(a,"hidden");b.L(a)});b.P(fb,V)}function ob(b,a){bb(b,a,d)}function bb(g,f,j){if(Rb&&(!B&&(F||!(E&12))||a.xc)){M=d;B=l;z.cb();if(f==k)f=Vb;var e=Cb.eb(),b=g;if(j){b=e+g;if(g>0)b=c.ceil(b);else b=c.floor(b)}if(D&2)b=t(b);if(!(D&1))b=c.max(0,c.min(b,r-u));var i=(b-e)%r;b=e+i;var h=e==b?0:f*c.abs(i);h=c.min(h,f*u*1.5);z.qb(e,b,h||1)}}g.Lc=function(){if(!N){N=d;C[s]&&C[s].jc()}};function W(){return b.i(y||p)}function lb(){return b.l(y||p)}g.W=W;g.V=lb;function Eb(c,d){if(c==k)return b.i(p);if(!y){var a=b.Ab(f);b.Fc(a,b.Fc(p));b.Eb(a,b.Eb(p));b.H(a,"block");b.u(a,"relative");b.B(a,0);b.D(a,0);b.Fb(a,"visible");y=b.Ab(f);b.u(y,"absolute");b.B(y,0);b.D(y,0);b.i(y,b.i(p));b.l(y,b.l(p));b.vc(y,"0 0");b.E(y,a);var h=b.Bb(p);b.E(p,y);b.K(p,"backgroundImage","");b.e(h,function(c){b.E(b.g(c,"noscale")?p:a,c);b.g(c,"autocenter")&&Mb.push(c)})}Y=c/(d?b.l:b.i)(y);b.se(y,Y);var g=d?Y*W():c,e=d?c:Y*lb();b.i(p,g);b.l(p,e);b.e(Mb,function(a){var c=b.wd(b.g(a,"autocenter"));b.ld(a,c)})}g.od=Eb;n.call(g);g.bb=p=b.db(p);var a=b.Y({fb:0,ve:1,dc:1,ec:0,fc:l,Ib:1,ob:d,xc:d,kc:1,Ec:3e3,Dc:1,Gb:500,me:e.Wd,Kc:20,hc:0,T:1,Cc:0,jd:1,lc:1,Bc:1},fc);a.ob=a.ob&&b.ye();if(a.ud!=k)a.Ec=a.ud;if(a.Vd!=k)a.Cc=a.Vd;var eb=a.lc&3,tc=(a.lc&4)/-4||1,kb=a.We,I=b.Y({I:q,ob:a.ob},a.Ye);I.cc=I.cc||I.Xe;var Fb=a.Pd,Z=a.Md,db=a.Ve,Q=!a.jd,y,v=b.z(p,"slides",Q),fb=b.z(p,"loading",Q)||b.Ab(f),Nb=b.z(p,"navigator",Q),dc=b.z(p,"arrowleft",Q),ac=b.z(p,"arrowright",Q),Lb=b.z(p,"thumbnavigator",Q),oc=b.i(v),mc=b.l(v),V,T=[],uc=b.Bb(v);b.e(uc,function(a){if(a.tagName=="DIV"&&!b.g(a,"u"))T.push(a);else b.Jc()&&b.v(a,(b.v(a)||0)+1)});var s=-1,wb,sb,r=T.length,K=a.wc||oc,J=a.Hd||mc,Wb=a.hc,zb=K+Wb,Ab=J+Wb,bc=eb&1?zb:Ab,u=c.min(a.T,r),jb,x,O,yb,S=[],Qb,Sb,Ob,cc,Cc,N,E=a.Dc,lc=a.Ec,Vb=a.Gb,qb,tb,ib,Rb=u<r,D=Rb?a.Ib:0,X,P,F=1,M,B,R,ub=0,vb=0,H,gb,hb,Cb,w,U,z,Tb=new pc,Y,Mb=[];if(r){if(a.ob)Kb=function(a,c,d){b.ub(a,{Z:c,ab:d})};N=a.fc;g.Hb=fc;ic();b.o(p,"jssor-slider",d);b.v(v,b.v(v)||0);b.u(v,"absolute");jb=b.hb(v,d);b.vb(jb,v);if(kb){cc=kb.Te;qb=kb.I;tb=u==1&&r>1&&qb&&(!b.dd()||b.uc()>=8)}ib=tb||u>=r||!(D&1)?0:a.Cc;X=(u>1||ib?eb:-1)&a.Bc;var Gb=v,C=[],A,L,Db=b.Me(),mb=Db.He,G,pb,Ib,rb;Db.cd&&b.K(Gb,Db.cd,([j,"pan-y","pan-x","none"])[X]||"");U=new zc;if(tb)A=new qb(Tb,K,J,kb,mb);b.E(jb,U.oc);b.Fb(v,"hidden");L=Xb();b.K(L,"backgroundColor","#000");b.Jb(L,0);b.vb(L,Gb.firstChild,Gb);for(var cb=0;cb<T.length;cb++){var wc=T[cb],yc=new xc(wc,cb);C.push(yc)}b.L(fb);Cb=new Ac;z=new nc(Cb,U);if(X){b.a(v,"mousedown",Yb);b.a(v,"touchstart",rc);b.a(v,"dragstart",Hb);b.a(v,"selectstart",Hb);b.a(f,"mouseup",ab);b.a(f,"touchend",ab);b.a(f,"touchcancel",ab);b.a(h,"blur",ab)}E&=mb?10:5;if(Nb&&Fb){Qb=new Fb.I(Nb,Fb,W(),lb());S.push(Qb)}if(Z&&dc&&ac){Z.Ib=D;Z.T=u;Sb=new Z.I(dc,ac,Z,W(),lb());S.push(Sb)}if(Lb&&db){db.ec=a.ec;Ob=new db.I(Lb,db);S.push(Ob)}b.e(S,function(a){a.Wb(r,C,fb);a.mb(o.Qb,kc)});b.K(p,"visibility","visible");Eb(W());b.a(v,"click",jc,d);b.a(p,"mouseout",b.Xb(hc,p));b.a(p,"mouseover",b.Xb(Ec,p));xb();a.dc&&b.a(f,"keydown",function(b){if(b.keyCode==37)ob(-a.dc);else b.keyCode==39&&ob(a.dc)});var nb=a.ec;if(!(D&1))nb=c.max(0,c.min(nb,r-u));z.qb(nb,nb,0)}};i.Oe=21;i.ce=22;i.de=23;i.qe=24;i.ne=25;i.Le=26;i.be=27;i.Xd=28;i.re=202;i.le=203;i.Ee=206;i.De=207;i.Ae=208;i.Qc=209;var o={Qb:1},r=function(e,C){var f=this;n.call(f);e=b.db(e);var s,A,z,r,k=0,a,m,i,w,x,h,g,q,p,B=[],y=[];function v(a){a!=-1&&y[a].Rd(a==k)}function t(a){f.f(o.Qb,a*m)}f.bb=e;f.gc=function(a){if(a!=r){var d=k,b=c.floor(a/m);k=b;r=a;v(d);v(b)}};f.Ub=function(a){b.G(e,a)};var u;f.Wb=function(D){if(!u){s=c.ceil(D/m);k=0;var o=q+w,r=p+x,n=c.ceil(s/i)-1;A=q+o*(!h?n:i-1);z=p+r*(h?n:i-1);b.i(e,A);b.l(e,z);for(var f=0;f<s;f++){var C=b.zd();b.he(C,f+1);var l=b.vd(g,"numbertemplate",C,d);b.u(l,"absolute");var v=f%(n+1);b.D(l,!h?o*v:f%i*o);b.B(l,h?r*v:c.floor(f/(n+1))*r);b.E(e,l);B[f]=l;a.Vb&1&&b.a(l,"click",b.C(j,t,f));a.Vb&2&&b.a(l,"mouseover",b.Xb(b.C(j,t,f),l));y[f]=b.Kb(l)}u=d}};f.Hb=a=b.Y({Sb:10,Lb:10,Xc:1,Vb:1},C);g=b.z(e,"prototype");q=b.i(g);p=b.l(g);b.Cb(g,e);m=a.ac||1;i=a.pd||1;w=a.Sb;x=a.Lb;h=a.Xc-1;a.bc==l&&b.o(e,"noscale",d);a.ib&&b.o(e,"autocenter",a.ib)},s=function(a,g,h){var c=this;n.call(c);var r,q,e,f,i;b.i(a);b.l(a);function k(a){c.f(o.Qb,a,d)}function p(c){b.G(a,c||!h.Ib&&e==0);b.G(g,c||!h.Ib&&e>=q-h.T);r=c}c.gc=function(b,a,c){if(c)e=a;else{e=b;p(r)}};c.Ub=p;var m;c.Wb=function(c){q=c;e=0;if(!m){b.a(a,"click",b.C(j,k,-i));b.a(g,"click",b.C(j,k,i));b.Kb(a);b.Kb(g);m=d}};c.Hb=f=b.Y({ac:1},h);i=f.ac;if(f.bc==l){b.o(a,"noscale",d);b.o(g,"noscale",d)}if(f.ib){b.o(a,"autocenter",f.ib);b.o(g,"autocenter",f.ib)}};function q(e,d,c){var a=this;m.call(a,0,c);a.Sc=b.Hc;a.fd=0;a.gd=c}jssor_1_slider_init=function(){var f={fc:d,kc:4,Gb:160,wc:200,hc:3,T:4,Md:{I:s,ac:4},Pd:{I:r,Sb:1,Lb:1}},e=new i("jssor_1",f);function a(){var b=e.bb.parentNode.clientWidth;if(b){b=c.min(b,809);e.od(b)}else h.setTimeout(a,30)}a();b.a(h,"load",a);b.a(h,"resize",a);b.a(h,"orientationchange",a)}})(window,document,Math,null,true,false)</script><style>.jssorb03{position:absolute}.jssorb03 div,.jssorb03 div:hover,.jssorb03 .av{position:absolute;width:21px;height:21px;text-align:center;line-height:21px;color:#fff;font-size:12px;background:url('img/b03.png') no-repeat;overflow:hidden;cursor:pointer}.jssorb03 div{background-position:-5px -4px}.jssorb03 div:hover,.jssorb03 .av:hover{background-position:-35px -4px}.jssorb03 .av{background-position:-65px -4px}.jssorb03 .dn,.jssorb03 .dn:hover{background-position:-95px -4px}.jssora03l,.jssora03r{display:block;position:absolute;width:55px;height:55px;cursor:pointer;background:url('img/a03.png') no-repeat;overflow:hidden}.jssora03l{background-position:-3px -33px}.jssora03r{background-position:-63px -33px}.jssora03l:hover{background-position:-123px -33px}.jssora03r:hover{background-position:-183px -33px}.jssora03l.jssora03ldn{background-position:-243px -33px}.jssora03r.jssora03rdn{background-position:-303px -33px}</style>
<div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 809px; height: 150px; overflow: hidden; visibility: hidden;">
<!-- Loading Screen --><div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
<div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
<div style="position:absolute;display:block;background:url('admin/images/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div></div>
<div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 809px; height: 150px; overflow: hidden;">
<div style="display: none;"><img data-u="image" src="admin/images/adidastshirt.jpg" /></div>
<div style="display: none;"><img data-u="image" src="admin/images/bedone.jpg" /></div>
<div style="display: none;"><img data-u="image" src="admin/images/rentedhouse.jpg" /></div>
<div style="display: none;"><img data-u="image" src="admin/images/top.jpeg" /></div>
<div style="display: none;"><img data-u="image" src="admin/images/hyundai.jpg" /></div>
<div style="display: none;"><img data-u="image" src="admin/images/sofaimg.jpg" /></div>
<div style="display: none;"><img data-u="image" src="admin/images/tata.jpg" /></div>
<div style="display: none;"><img data-u="image" src="admin/images/acimg.jpg" /></div>
<div style="display: none;"><img data-u="image" src="admin/images/asuslaptop.jpg" /></div>
<div style="display: none;"><img data-u="image" src="admin/images/secondhandled.png" /></div>
<div style="display: none;"><img data-u="image" src="admin/images/dg.jpg" /></div>
<div style="display: none;"><img data-u="image" src="admin/images/woodenrack.jpg" /></div>
<div style="display: none;"><img data-u="image" src="admin/images/vivov5.jpg"  /></div>
<div style="display: none;"><img data-u="image" src="admin/images/lenovotab.jpg" /></div>
<div style="display: none;"><img data-u="image" src="admin/images/yonex.jpeg" /></div>
<div style="display: none;"><img data-u="image" src="admin/images/treadmill.jpg" /></div>
<div style="display: none;"><img data-u="image" src="admin/images/aquarium.jpg" /></div>
<div style="display: none;"><img data-u="image" src="admin/images/chem.jpg" /></div>
<a data-u="ad" href="http://www.jssor.com" style="display:none">jQuery Slider</a></div>
<!-- Bullet Navigator --><div data-u="navigator" class="jssorb03" style="bottom:10px;right:10px;">
<!-- bullet navigator item prototype -->
<div data-u="prototype" style="width:21px;height:21px;">
	<div data-u="numbertemplate"></div></div></div>
	<!-- Arrow Navigator --><span data-u="arrowleft" class="jssora03l" style="top:0px;left:8px;width:55px;height:55px;" data-autocenter="2"></span>
	<span data-u="arrowright" class="jssora03r" style="top:0px;right:8px;width:55px;height:55px;" data-autocenter="2"></span></div>
	<script>jssor_1_slider_init();</script><!-- #endregion Jssor Slider End -->
</div>
<div class="footer_above">
<img src="images/footerabove.jpg" alt="NOT FOUND" height="300px" width="100%" />
</div>
<div class="footer_sec">
<div class="main_lines">
<p><b>Sell or Advertise anything online with classyMARKET</b></p>
<p>Join the Millions who buy and sell from each other 
everyday in local communities around the country</p>
</div>
<div class="menu_footer">
<menu>MENU</menu>
<li><a href="index.php">HOME</a></li>
<li><a href="contactcm.php">CONTACT US</a></li>
<li><a href="queries.php">ANY QUERIES</a></li>
</div>
 <div class="text_blockfooter"> 
 <li><i class="fa fa-envelope"></i>&nbsp&nbspEmail us at classymarket@gmail.com</li>
<li> <i class="fa fa-phone"></i>&nbsp&nbsp Call us at 9530978767</li>
 <li><i class="fa fa-clock-o"> </i>&nbsp&nbspBusiness Hours
								<li>&nbsp&nbsp&nbsp&nbspMon - Fri 7AM - 7PM PST</li>
								<li>&nbsp&nbsp&nbsp&nbspSat - Sun 7AM - 3PM PST</li>
								</li>

  </div>

</div>
<div class="copyright">
<p>Copyright ©2018 All rights reserved | Designed by <a>Anureet Kaur</a>
</p>
<div class="facebook" >
<p><i class="fa fa-facebook" ></i>  <i class="fa fa-instagram"></i> <i class="fa fa-twitter"></i>
<i class="fa fa-pinterest"></i></p>
</div>
</div>

</body>
</html>