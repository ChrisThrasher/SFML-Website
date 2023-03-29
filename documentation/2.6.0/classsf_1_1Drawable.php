<?php
    $version = '2.6.0'; // the $ projectnumber variable is automatically replaced by doxygen with the version number
    $pagetitle = 'sf::Drawable Class Reference'; // the $ title variable is automatically replaced by doxygen with the page title
    include('../header.php');
?>
<!-- Generated by Doxygen 1.9.6 -->
<script type="text/javascript">
/* @license magnet:?xt=urn:btih:d3d9a9a6595521f9666a5e94cc830dab83b65699&amp;dn=expat.txt MIT */
var searchBox = new SearchBox("searchBox", "search/",'.php');
/* @license-end */
</script>
  <div id="navrow1" class="tabs">
    <ul class="tablist">
      <li><a href="index.php"><span>Main&#160;Page</span></a></li>
      <li><a href="pages.php"><span>Related&#160;Pages</span></a></li>
      <li><a href="modules.php"><span>Modules</span></a></li>
      <li><a href="namespaces.php"><span>Namespaces</span></a></li>
      <li class="current"><a href="annotated.php"><span>Classes</span></a></li>
      <li><a href="files.php"><span>Files</span></a></li>
      <li>
        <div id="MSearchBox" class="MSearchBoxInactive">
        <span class="left">
          <span id="MSearchSelect"                onmouseover="return searchBox.OnSearchSelectShow()"                onmouseout="return searchBox.OnSearchSelectHide()">&#160;</span>
          <input type="text" id="MSearchField" value="" placeholder="Search" accesskey="S"
               onfocus="searchBox.OnSearchFieldFocus(true)" 
               onblur="searchBox.OnSearchFieldFocus(false)" 
               onkeyup="searchBox.OnSearchFieldChange(event)"/>
          </span><span class="right">
            <a id="MSearchClose" href="javascript:searchBox.CloseResultsWindow()"><img id="MSearchCloseImg" border="0" src="search/close.svg" alt=""/></a>
          </span>
        </div>
      </li>
    </ul>
  </div>
  <div id="navrow2" class="tabs2">
    <ul class="tablist">
      <li><a href="annotated.php"><span>Class&#160;List</span></a></li>
      <li><a href="classes.php"><span>Class&#160;Index</span></a></li>
      <li><a href="hierarchy.php"><span>Class&#160;Hierarchy</span></a></li>
      <li><a href="functions.php"><span>Class&#160;Members</span></a></li>
    </ul>
  </div>
<!-- window showing the filter options -->
<div id="MSearchSelectWindow"
     onmouseover="return searchBox.OnSearchSelectShow()"
     onmouseout="return searchBox.OnSearchSelectHide()"
     onkeydown="return searchBox.OnSearchSelectKey(event)">
</div>

<!-- iframe showing the search results (closed by default) -->
<div id="MSearchResultsWindow">
<div id="MSearchResults">
<div class="SRPage">
<div id="SRIndex">
<div id="SRResults"></div>
<div class="SRStatus" id="Loading">Loading...</div>
<div class="SRStatus" id="Searching">Searching...</div>
<div class="SRStatus" id="NoMatches">No Matches</div>
</div>
</div>
</div>
</div>

<div id="nav-path" class="navpath">
  <ul>
<li class="navelem"><b>sf</b></li><li class="navelem"><a class="el" href="classsf_1_1Drawable.php">Drawable</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="summary">
<a href="#pub-methods">Public Member Functions</a> &#124;
<a href="#pro-methods">Protected Member Functions</a> &#124;
<a href="#friends">Friends</a> &#124;
<a href="classsf_1_1Drawable-members.php">List of all members</a>  </div>
  <div class="headertitle"><div class="title">sf::Drawable Class Reference<span class="mlabels"><span class="mlabel">abstract</span></span><div class="ingroups"><a class="el" href="group__graphics.php">Graphics module</a></div></div></div>
</div><!--header-->
<div class="contents">

<p>Abstract base class for objects that can be drawn to a render target.  
 <a href="classsf_1_1Drawable.php#details">More...</a></p>

<p><code>#include &lt;<a class="el" href="Drawable_8hpp_source.php">SFML/Graphics/Drawable.hpp</a>&gt;</code></p>
<div class="dynheader">
Inheritance diagram for sf::Drawable:</div>
<div class="dyncontent">
 <div class="center">
  <img src="classsf_1_1Drawable.png" usemap="#sf::Drawable_map" alt=""/>
  <map id="sf::Drawable_map" name="sf::Drawable_map">
<area href="classsf_1_1Shape.php" title="Base class for textured shapes with outline." alt="sf::Shape" shape="rect" coords="130,56,250,80"/>
<area href="classsf_1_1Sprite.php" title="Drawable representation of a texture, with its own transformations, color, etc." alt="sf::Sprite" shape="rect" coords="260,56,380,80"/>
<area href="classsf_1_1Text.php" title="Graphical text that can be drawn to a render target." alt="sf::Text" shape="rect" coords="390,56,510,80"/>
<area href="classsf_1_1VertexArray.php" title="Define a set of one or more 2D primitives." alt="sf::VertexArray" shape="rect" coords="520,56,640,80"/>
<area href="classsf_1_1VertexBuffer.php" title="Vertex buffer storage for one or more 2D primitives." alt="sf::VertexBuffer" shape="rect" coords="650,56,770,80"/>
<area href="classsf_1_1CircleShape.php" title="Specialized shape representing a circle." alt="sf::CircleShape" shape="rect" coords="0,112,120,136"/>
<area href="classsf_1_1ConvexShape.php" title="Specialized shape representing a convex polygon." alt="sf::ConvexShape" shape="rect" coords="130,112,250,136"/>
<area href="classsf_1_1RectangleShape.php" title="Specialized shape representing a rectangle." alt="sf::RectangleShape" shape="rect" coords="260,112,380,136"/>
  </map>
</div></div>
<table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a id="pub-methods" name="pub-methods"></a>
Public Member Functions</h2></td></tr>
<tr class="memitem:a906002f2df7beb5edbddf5bbef96f120"><td class="memItemLeft" align="right" valign="top">virtual&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Drawable.php#a906002f2df7beb5edbddf5bbef96f120">~Drawable</a> ()</td></tr>
<tr class="memdesc:a906002f2df7beb5edbddf5bbef96f120"><td class="mdescLeft">&#160;</td><td class="mdescRight">Virtual destructor.  <br /></td></tr>
<tr class="separator:a906002f2df7beb5edbddf5bbef96f120"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a id="pro-methods" name="pro-methods"></a>
Protected Member Functions</h2></td></tr>
<tr class="memitem:a90d2c88bba9b035a0844eccb380ef631"><td class="memItemLeft" align="right" valign="top">virtual void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Drawable.php#a90d2c88bba9b035a0844eccb380ef631">draw</a> (<a class="el" href="classsf_1_1RenderTarget.php">RenderTarget</a> &amp;target, <a class="el" href="classsf_1_1RenderStates.php">RenderStates</a> states) const =0</td></tr>
<tr class="memdesc:a90d2c88bba9b035a0844eccb380ef631"><td class="mdescLeft">&#160;</td><td class="mdescRight">Draw the object to a render target.  <br /></td></tr>
<tr class="separator:a90d2c88bba9b035a0844eccb380ef631"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a id="friends" name="friends"></a>
Friends</h2></td></tr>
<tr class="memitem:aa5afc6f82b7b587ed5ada4d227ce32aa"><td class="memItemLeft" align="right" valign="top">class&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Drawable.php#aa5afc6f82b7b587ed5ada4d227ce32aa">RenderTarget</a></td></tr>
<tr class="separator:aa5afc6f82b7b587ed5ada4d227ce32aa"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<div class="textblock"><p>Abstract base class for objects that can be drawn to a render target. </p>
<p><a class="el" href="classsf_1_1Drawable.php" title="Abstract base class for objects that can be drawn to a render target.">sf::Drawable</a> is a very simple base class that allows objects of derived classes to be drawn to a <a class="el" href="classsf_1_1RenderTarget.php" title="Base class for all render targets (window, texture, ...)">sf::RenderTarget</a>.</p>
<p>All you have to do in your derived class is to override the draw virtual function.</p>
<p>Note that inheriting from <a class="el" href="classsf_1_1Drawable.php" title="Abstract base class for objects that can be drawn to a render target.">sf::Drawable</a> is not mandatory, but it allows this nice syntax "window.draw(object)" rather than "object.draw(window)", which is more consistent with other SFML classes.</p>
<p>Example: </p><div class="fragment"><div class="line"><span class="keyword">class </span>MyDrawable : <span class="keyword">public</span> <a class="code hl_class" href="classsf_1_1Drawable.php">sf::Drawable</a></div>
<div class="line">{</div>
<div class="line"><span class="keyword">public</span>:</div>
<div class="line"> </div>
<div class="line">   ...</div>
<div class="line"> </div>
<div class="line">private:</div>
<div class="line"> </div>
<div class="line">    <span class="keyword">virtual</span> <span class="keywordtype">void</span> draw(<a class="code hl_class" href="classsf_1_1RenderTarget.php">sf::RenderTarget</a>&amp; target, <a class="code hl_class" href="classsf_1_1RenderStates.php">sf::RenderStates</a> states)<span class="keyword"> const</span></div>
<div class="line"><span class="keyword">    </span>{</div>
<div class="line">        <span class="comment">// You can draw other high-level objects</span></div>
<div class="line">        target.<a class="code hl_function" href="classsf_1_1RenderTarget.php#a12417a3bcc245c41d957b29583556f39">draw</a>(m_sprite, states);</div>
<div class="line"> </div>
<div class="line">        <span class="comment">// ... or use the low-level API</span></div>
<div class="line">        states.<a class="code hl_variable" href="classsf_1_1RenderStates.php#a457fc5a41731889de9cf39cf9b3436c3">texture</a> = &amp;m_texture;</div>
<div class="line">        target.<a class="code hl_function" href="classsf_1_1RenderTarget.php#a12417a3bcc245c41d957b29583556f39">draw</a>(m_vertices, states);</div>
<div class="line"> </div>
<div class="line">        <span class="comment">// ... or draw with OpenGL directly</span></div>
<div class="line">        glBegin(GL_QUADS);</div>
<div class="line">        ...</div>
<div class="line">        glEnd();</div>
<div class="line">    }</div>
<div class="line"> </div>
<div class="line">    <a class="code hl_class" href="classsf_1_1Sprite.php">sf::Sprite</a> m_sprite;</div>
<div class="line">    <a class="code hl_class" href="classsf_1_1Texture.php">sf::Texture</a> m_texture;</div>
<div class="line">    <a class="code hl_class" href="classsf_1_1VertexArray.php">sf::VertexArray</a> m_vertices;</div>
<div class="line">};</div>
<div class="ttc" id="aclasssf_1_1Drawable_php"><div class="ttname"><a href="classsf_1_1Drawable.php">sf::Drawable</a></div><div class="ttdoc">Abstract base class for objects that can be drawn to a render target.</div><div class="ttdef"><b>Definition:</b> <a href="Drawable_8hpp_source.php#l00044">Drawable.hpp:45</a></div></div>
<div class="ttc" id="aclasssf_1_1RenderStates_php"><div class="ttname"><a href="classsf_1_1RenderStates.php">sf::RenderStates</a></div><div class="ttdoc">Define the states used for drawing to a RenderTarget.</div><div class="ttdef"><b>Definition:</b> <a href="RenderStates_8hpp_source.php#l00045">RenderStates.hpp:46</a></div></div>
<div class="ttc" id="aclasssf_1_1RenderStates_php_a457fc5a41731889de9cf39cf9b3436c3"><div class="ttname"><a href="classsf_1_1RenderStates.php#a457fc5a41731889de9cf39cf9b3436c3">sf::RenderStates::texture</a></div><div class="ttdeci">const Texture * texture</div><div class="ttdoc">Texture.</div><div class="ttdef"><b>Definition:</b> <a href="RenderStates_8hpp_source.php#l00117">RenderStates.hpp:117</a></div></div>
<div class="ttc" id="aclasssf_1_1RenderTarget_php"><div class="ttname"><a href="classsf_1_1RenderTarget.php">sf::RenderTarget</a></div><div class="ttdoc">Base class for all render targets (window, texture, ...)</div><div class="ttdef"><b>Definition:</b> <a href="RenderTarget_8hpp_source.php#l00052">RenderTarget.hpp:53</a></div></div>
<div class="ttc" id="aclasssf_1_1RenderTarget_php_a12417a3bcc245c41d957b29583556f39"><div class="ttname"><a href="classsf_1_1RenderTarget.php#a12417a3bcc245c41d957b29583556f39">sf::RenderTarget::draw</a></div><div class="ttdeci">void draw(const Drawable &amp;drawable, const RenderStates &amp;states=RenderStates::Default)</div><div class="ttdoc">Draw a drawable object to the render target.</div></div>
<div class="ttc" id="aclasssf_1_1Sprite_php"><div class="ttname"><a href="classsf_1_1Sprite.php">sf::Sprite</a></div><div class="ttdoc">Drawable representation of a texture, with its own transformations, color, etc.</div><div class="ttdef"><b>Definition:</b> <a href="Sprite_8hpp_source.php#l00047">Sprite.hpp:48</a></div></div>
<div class="ttc" id="aclasssf_1_1Texture_php"><div class="ttname"><a href="classsf_1_1Texture.php">sf::Texture</a></div><div class="ttdoc">Image living on the graphics card that can be used for drawing.</div><div class="ttdef"><b>Definition:</b> <a href="Texture_8hpp_source.php#l00048">Texture.hpp:49</a></div></div>
<div class="ttc" id="aclasssf_1_1VertexArray_php"><div class="ttname"><a href="classsf_1_1VertexArray.php">sf::VertexArray</a></div><div class="ttdoc">Define a set of one or more 2D primitives.</div><div class="ttdef"><b>Definition:</b> <a href="VertexArray_8hpp_source.php#l00045">VertexArray.hpp:46</a></div></div>
</div><!-- fragment --><dl class="section see"><dt>See also</dt><dd><a class="el" href="classsf_1_1RenderTarget.php" title="Base class for all render targets (window, texture, ...)">sf::RenderTarget</a> </dd></dl>

<p class="definition">Definition at line <a class="el" href="Drawable_8hpp_source.php#l00044">44</a> of file <a class="el" href="Drawable_8hpp_source.php">Drawable.hpp</a>.</p>
</div><h2 class="groupheader">Constructor &amp; Destructor Documentation</h2>
<a id="a906002f2df7beb5edbddf5bbef96f120" name="a906002f2df7beb5edbddf5bbef96f120"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a906002f2df7beb5edbddf5bbef96f120">&#9670;&#160;</a></span>~Drawable()</h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">virtual sf::Drawable::~Drawable </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">inline</span><span class="mlabel">virtual</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Virtual destructor. </p>

<p class="definition">Definition at line <a class="el" href="Drawable_8hpp_source.php#l00052">52</a> of file <a class="el" href="Drawable_8hpp_source.php">Drawable.hpp</a>.</p>

</div>
</div>
<h2 class="groupheader">Member Function Documentation</h2>
<a id="a90d2c88bba9b035a0844eccb380ef631" name="a90d2c88bba9b035a0844eccb380ef631"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a90d2c88bba9b035a0844eccb380ef631">&#9670;&#160;</a></span>draw()</h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">virtual void sf::Drawable::draw </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="classsf_1_1RenderTarget.php">RenderTarget</a> &amp;&#160;</td>
          <td class="paramname"><em>target</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="classsf_1_1RenderStates.php">RenderStates</a>&#160;</td>
          <td class="paramname"><em>states</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td> const</td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">protected</span><span class="mlabel">pure virtual</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Draw the object to a render target. </p>
<p>This is a pure virtual function that has to be implemented by the derived class to define how the drawable should be drawn.</p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">target</td><td>Render target to draw to </td></tr>
    <tr><td class="paramname">states</td><td>Current render states </td></tr>
  </table>
  </dd>
</dl>

</div>
</div>
<h2 class="groupheader">Friends And Related Function Documentation</h2>
<a id="aa5afc6f82b7b587ed5ada4d227ce32aa" name="aa5afc6f82b7b587ed5ada4d227ce32aa"></a>
<h2 class="memtitle"><span class="permalink"><a href="#aa5afc6f82b7b587ed5ada4d227ce32aa">&#9670;&#160;</a></span>RenderTarget</h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">friend class <a class="el" href="classsf_1_1RenderTarget.php">RenderTarget</a></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">friend</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p class="definition">Definition at line <a class="el" href="Drawable_8hpp_source.php#l00056">56</a> of file <a class="el" href="Drawable_8hpp_source.php">Drawable.hpp</a>.</p>

</div>
</div>
<hr/>The documentation for this class was generated from the following file:<ul>
<li><a class="el" href="Drawable_8hpp_source.php">Drawable.hpp</a></li>
</ul>
</div><!-- contents -->
<?php
    require("../footer.php");
?>
