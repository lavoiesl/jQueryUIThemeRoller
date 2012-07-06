<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="cn" lang="cn">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <title>Themeroller Developer Tool</title>
      <?php include_once('_head.php')?>
      <script src="developertool.js.php" type="text/javascript"></script>
      <script src="static/demos.js" type="text/javascript"></script>
      <style>
         .demo-col{
               margin:1%;
               *display:inline;
               width:48%;
               float:left;
         }
      </style>
      </head><body>
      <div id="wrapper" class="ui-layout">
         <div id="header" class="ui-toolbar">
            <div id="header-inner" class="clearfix">
               <div id="logo">
                  <a href="/"><span class="f3">OPENGOSS</span><br />->user interface</a>
               </div>
               <div id="navbar">
                  <div id="subnav" class="clearfix">
                     <div id="unused">
                        <a href="/administrator">administrator</a><span class="pipe">|</span>
                        <a href="/logout" title="退出">退出</a>
                     </div>
                  </div>
                  <ul id="navigation" class="ul">
                     <li class="ui-corner-top ui-state-active"><a href="/dashboard">首页</a></li>
                     <li><a href="../demos/" target="_blank">JQ UI demos</a></li>
                  </ul>
                  <div id="basic-search">
                     <form action="/search">
                        <span id="basic-search-wrap" class="ui-input ui-corner-all"><label class="ui-icon ui-icon-search" for="basic-search-q"></label><input id="basic-search-q" type="text" name="q" class="text"/></span>
                     </form>
                  </div>

               </div>
            </div>

         </div>

         <div id="content" class="clearfix has-sidebar">
            <div id="sidebar">
               <ul id="menu">
                  <li class="ui-menu-open">
                  <h3> 
                     <a href='index.php'><em class="icon icon-dashboard">icon</em><span>Form</span></a>
                  </h3>
                  <ol>
                     <li><a href="/">HP Unix@202.12.33.09</a></li>
                     <li class="ui-state-light"><a href="/dashboard/view">FreeBSD@102.12.3.09</a></li>
                     <li><a href="/dashboard/view">Solaris@212.12.3.09</a></li>

                  </ol>    
                  </li>
                  <li class="ui-menu-separator"><hr /></li>
                  <li class="ui-menu-open">
                  <h3> 
                     <a href='index.php'><em class="icon icon-dashboard">icon</em><span>Widgets</span></a>
                  </h3>
                  <ol>
                     <li><a href="/">menu</a></li>
                     <li><a href="/dashboard/view">grid</a></li>
                  </ol>    
                  </li> 
                  <li>
                  <h3> 
                     <a href='index.php'><em class="icon icon-dashboard">icon</em><span>快速导航</span></a>
                  </h3>
                  <ol>
                     <li><a href="/">HP Unix@202.12.33.09</a></li>
                     <li><a href="/dashboard/view">FreeBSD@102.12.3.09</a></li>
                     <li><a href="/dashboard/view">Solaris@212.12.3.09</a></li>
                  </ol>    
                  </li> 
                  <li>
                  <h3> 
                     <a href='index.php'><em class="icon icon-dashboard">icon</em><span>快速导航</span></a>
                  </h3>
                  <ol>
                     <li><a href="/">HP Unix@202.12.33.09</a></li>
                     <li><a href="/dashboard/view">FreeBSD@102.12.3.09</a></li>
                     <li><a href="/dashboard/view">Solaris@212.12.3.09</a></li>
                  </ol>    
                  </li> 

               </ul>
            </div>
            <div id="widebar" class="clearfix" >
               <div id="screen-meta">
                  <div id="screen-options">
                     <h3>在屏幕上显示</h3>
                     <form action="" method="get">
                        <div class="metabox-prefs">


                           <label for="resource_equipment_name"><input name="resource[equipment_name]" type="checkbox" id="resource_equipment_name" value="" checked="checked" />设备名称</label>

                           <label for="resource_factroy"><input name="resource[factroy]" type="checkbox" id="resource_factroy" value="" checked="checked" />设备厂家</label>


                           <label for="resource_ip"><input name="resource[ip]" type="checkbox" id="resource_ip" value="" checked="checked" />IP</label>


                        </div>
                     </form>
                  </div>

                  <div id="contextual-help">
                     <h3>获取“控制板”帮助</h3>

                     <div class="metabox-prefs">
                        <p>这个页面上的大部分组件都是可以移动的，如果组件可以移动，您把鼠标指针放到一个组件的标题上指针会变成十字，那么您可以拖拽这个组件到一个新位置。当您拖拽的时候会有一灰色虚线框同时移动，这个框就是你松开鼠标后组件将移动到的新位置。</p>
                     </div>

                  </div>
                  <ul id="screen-meta-tabs">
                     <li><a href="#contextual-help">帮助<em class="ui-icon ui-icon-carat-1-s"></em></a></li>
                     <li><a href="#screen-options">显示选项<em class="ui-icon ui-icon-carat-1-s"></em></a></li>
                  </ul>
               </div>

               <?php //include('_themeRoller.php');?>
               <div id="widebar-inner" class="clearfix">
                  <div class="f3">
                  <a href="bb">link</a>
                  <a href="bb">hhhhhhhhhhhhhhh</a>
                  </div>

                  <div class="clearfix demo-col">

                     <!-- Pagination -->

                     <h2 class="demoHeaders">Pagination</h2>
                     <div id="pagination"><span class="disabled prev_page">« Previous</span> <span class="current">1</span> <a rel="next" href="/resources/ap?page=2">2</a> <a href="/resources/ap?page=3">3</a> <a href="/resources/ap?page=4">4</a> <a href="/resources/ap?page=5">5</a> <span class="gap">…</span> <a href="/resources/ap?page=36">36</a> <a href="/resources/ap?page=37">37</a> <a rel="next" class="next_page" href="/resources/ap?page=2">Next »</a></div>

                     <!-- Grid -->

                     <h2 class="demoHeaders">Grid</h2>
                <table id="grid">
                        <thead>
                                <tr>
                                        <th><input type="checkbox" /></th>
                                        <th class="ui-grid-sort-desc">Col 1</th>
                                        <th><a href="#">Col 2</a></th>
                                        <th><a href="#">Col 3 is a long header name</a></th>
                                        <th>Col 4</th>
                                </tr>
                        </thead>
                        <tfoot>
                                <tr>
                                        <th><input type="checkbox" /></th>
                                        <th>Col 1</th>
                                        <th>Col 2</th>
                                        <th>Col 3 is a long header name</th>
                                        <th>Col 4</th>
                                </tr>
                        </tfoot>


                        <tbody>
                                <tr>
                                        <th><input type="checkbox" /></th>

                                        <td><a href="#">This is data 1 with overflowing content</a></td>
                                        <td>This is data 2</td>
                                        <td>This is data 3</td>
                                        <td>This is data 4</td>
                                </tr>

                                <tr>

                                        <th><input type="checkbox" /></th>
                                        <td>This is data 1</td>
                                        <td>This is data 2</td>
                                        <td>This is data 3</td>
                                        <td>This is data 4</td>
                                </tr>
                                <tr>

                                        <th><input type="checkbox" /></th>
                                        <td>This is data 1</td>
                                        <td>This is data 2</td>
                                        <td>This is data 3</td>
                                        <td>This is data 4</td>
                                </tr>
                                <tr>
                                        <th><input type="checkbox" /></th>
                                        <td>This is data 1</td>

                                        <td>This is data 2</td>
                                        <td>This is data 3</td>
                                        <td>This is data 4</td>
                                </tr>
                                <tr>
                                        <th><input type="checkbox" /></th>
                                        <td>This is data 1</td>

                                        <td>This is data 2</td>

                                        <td>This is data 3</td>
                                        <td>This is data 4</td>
                                </tr>
                                <tr>
                                        <th><input type="checkbox" /></th>
                                        <td>This is data 1</td>

                                        <td>This is data 2</td>
                                        <td>This is data 3</td>

                                        <td>This is data 4</td>
                                </tr>
                        </tbody>
                </table>

                     <!-- Form -->
                     <h2 class="demoHeaders">Form</h2>
                     <form class="form" id="form">
                        <div class="li"><label for="f_select" class="label">select</label>
                           <select name="date[hour]" id="date_hour" class="ui-input">
                              <option value="00">00</option>
                              <option value="10">10</option>
                              <option value="11" selected="selected">11</option>
                              <option value="19">19</option>
                              <option value="23">23</option>
                           </select>
                        </div>
                        <div class="li"><label for="f_radio" class="label">radio</label><label for="f_radio_yellow" class="f4">yellow<input type="radio"  name="f[radio]" id="f_radio_yellow" class="radio"/></label><label for="f_radio_red" class="f4">red<input type="radio"  name="f[radio]" id="f_radio_red" class="radio"/></label></div>
                        <div class="li"><label for="f_checkbox" class="label">checkbox</label><label for="f_chechbox_yellow" class="f4">yellow<input type="checkbox"  name="f[checkbox][yellow]" id="f_checkbox_yellow" class="checkbox"/></label><label for="f_chechbox_red" class="f4">red<input type="checkbox"  name="f[checkbox][red]" id="f_checkbox_red" class="checkbox"/></label></div>
                        <div class="li"><label for="f_input" class="label">input</label><input type="text"  name="f[input]" id="f_input" class="text ui-input"/></div>
                        <div class="li"><label for="f_textarea" class="label">textarea</label><textarea name="f[textarea]" id="f_textarea" class="textarea ui-input"></textarea></div>
                        <div class="li actions"><label class="label">&nbsp;</label><input class="submit ui-corner-all ui-state-default" name="commit" type="submit" value="确定" /></div>
                     </form>

                     <!-- Accordion -->
                     <h2 class="demoHeaders">Accordion</h2>
                     <div id="accordion">
                        <h3><a href="#">Section 1</a></h3>
                        <div>
                           <p>Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.</p>

                        </div>
                        <h3><a href="#">Section 2</a></h3>
                        <div>
                           <p>Sed non urna. Donec et ante. Phasellus eu ligula. Vestibulum sit amet purus. Vivamus hendrerit, dolor at aliquet laoreet, mauris turpis porttitor velit, faucibus interdum tellus libero ac justo. Vivamus non quam. In suscipit faucibus urna. </p>
                        </div>
                        <h3><a href="#">Section 3</a></h3>
                        <div>

                           <p>Nam enim risus, molestie et, porta ac, aliquam ac, risus. Quisque lobortis. Phasellus pellentesque purus in massa. Aenean in pede. Phasellus ac libero ac tellus pellentesque semper. Sed ac felis. Sed commodo, magna quis lacinia ornare, quam ante aliquam nisi, eu iaculis leo purus venenatis dui. </p>
                           <ul>
                              <li>List item one</li>
                              <li>List item two</li>
                              <li>List item three</li>
                           </ul>
                        </div>

                     </div>

                     <!-- Tabs -->
                     <h2 class="demoHeaders">Tabs</h2>
                     <div id="tabs">
                        <ul>
                           <li><a href="#tabs-1">First</a></li>
                           <li><a href="#tabs-2">Second</a></li>

                           <li><a href="#tabs-3">Third</a></li>
                        </ul>
                        <div id="tabs-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                        <div id="tabs-2">Phasellus mattis tincidunt nibh. Cras orci urna, blandit id, pretium vel, aliquet ornare, felis. Maecenas scelerisque sem non nisl. Fusce sed lorem in enim dictum bibendum.</div>
                        <div id="tabs-3">Nam dui erat, auctor a, dignissim quis, sollicitudin eu, felis. Pellentesque nisi urna, interdum eget, sagittis et, consequat vestibulum, lacus. Mauris porttitor ullamcorper augue.</div>
                     </div>

                     <!-- Dialog -->
                     <h2 class="demoHeaders">Dialog</h2>
                     <p><a href="#" id="dialog_link" class="ui-state-default ui-corner-all"><span class="ui-icon ui-icon-newwin"></span>Open Dialog</a></p>


                     <h2 class="demoHeaders">Overlay and Shadow Classes</h2>
                     <div style="position: relative; width: 96%; height: 200px; padding:1% 4%; overflow:hidden;" class="fakewindowcontain">
                        <p>Lorem ipsum dolor sit amet,  Nulla nec tortor. Donec id elit quis purus consectetur consequat. </p><p>Nam congue semper tellus. Sed erat dolor, dapibus sit amet, venenatis ornare, ultrices ut, nisi. Aliquam ante. Suspendisse scelerisque dui nec velit. Duis augue augue, gravida euismod, vulputate ac, facilisis id, sem. Morbi in orci. </p><p>Nulla purus lacus, pulvinar vel, malesuada ac, mattis nec, quam. Nam molestie scelerisque quam. Nullam feugiat cursus lacus.orem ipsum dolor sit amet, consectetur adipiscing elit. Donec libero risus, commodo vitae, pharetra mollis, posuere eu, pede. Nulla nec tortor. Donec id elit quis purus consectetur consequat. </p><p>Nam congue semper tellus. Sed erat dolor, dapibus sit amet, venenatis ornare, ultrices ut, nisi. Aliquam ante. Suspendisse scelerisque dui nec velit. Duis augue augue, gravida euismod, vulputate ac, facilisis id, sem. Morbi in orci. Nulla purus lacus, pulvinar vel, malesuada ac, mattis nec, quam. Nam molestie scelerisque quam. </p><p>Nullam feugiat cursus lacus.orem ipsum dolor sit amet, consectetur adipiscing elit. Donec libero risus, commodo vitae, pharetra mollis, posuere eu, pede. Nulla nec tortor. Donec id elit quis purus consectetur consequat. Nam congue semper tellus. Sed erat dolor, dapibus sit amet, venenatis ornare, ultrices ut, nisi. Aliquam ante. </p><p>Suspendisse scelerisque dui nec velit. Duis augue augue, gravida euismod, vulputate ac, facilisis id, sem. Morbi in orci. Nulla purus lacus, pulvinar vel, malesuada ac, mattis nec, quam. Nam molestie scelerisque quam. Nullam feugiat cursus lacus.orem ipsum dolor sit amet, consectetur adipiscing elit. Donec libero risus, commodo vitae, pharetra mollis, posuere eu, pede. Nulla nec tortor. Donec id elit quis purus consectetur consequat.</p>


                        <!-- ui-dialog -->
                        <div class="ui-overlay"><div class="ui-widget-overlay"></div><div class="ui-widget-shadow ui-corner-all" style="width: 302px; height: 152px; position: absolute; left: 50px; top: 30px;"></div></div>
                        <div style="position: absolute; width: 280px; height: 130px;left: 50px; top: 30px; padding: 10px;" class="ui-widget ui-widget-content ui-corner-all">
                           <div class="ui-dialog-content" style="border:0;">
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                           </div>
                        </div>

                     </div>


                     <!-- ui-dialog -->
                     <div id="dialog" title="Dialog Title">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                     </div>



                     <h2 class="demoHeaders">Framework Icons (content color preview)</h2>
                     <ul id="icons" class="ui-widget ui-helper-clearfix">

                        <li class="ui-state-default ui-corner-all" title=".ui-icon-carat-1-n"><span class="ui-icon ui-icon-carat-1-n"></span></li>

                        <li class="ui-state-default ui-corner-all" title=".ui-icon-carat-1-ne"><span class="ui-icon ui-icon-carat-1-ne"></span></li>
                        <li class="ui-state-default ui-corner-all" title=".ui-icon-carat-1-e"><span class="ui-icon ui-icon-carat-1-e"></span></li>

                        <li class="ui-state-default ui-corner-all" title=".ui-icon-carat-1-se"><span class="ui-icon ui-icon-carat-1-se"></span></li>
                        <li class="ui-state-default ui-corner-all" title=".ui-icon-carat-1-s"><span class="ui-icon ui-icon-carat-1-s"></span></li>
                        <li class="ui-state-default ui-corner-all" title=".ui-icon-carat-1-sw"><span class="ui-icon ui-icon-carat-1-sw"></span></li>
                        <li class="ui-state-default ui-corner-all" title=".ui-icon-carat-1-w"><span class="ui-icon ui-icon-carat-1-w"></span></li>
                        <li class="ui-state-default ui-corner-all" title=".ui-icon-carat-1-nw"><span class="ui-icon ui-icon-carat-1-nw"></span></li>
                        <li class="ui-state-default ui-corner-all" title=".ui-icon-carat-2-n-s"><span class="ui-icon ui-icon-carat-2-n-s"></span></li>
                        <li class="ui-state-default ui-corner-all" title=".ui-icon-carat-2-e-w"><span class="ui-icon ui-icon-carat-2-e-w"></span></li>

                        <li class="ui-state-default ui-corner-all" title=".ui-icon-triangle-1-n"><span class="ui-icon ui-icon-triangle-1-n"></span></li>
                        <li class="ui-state-default ui-corner-all" title=".ui-icon-triangle-1-ne"><span class="ui-icon ui-icon-triangle-1-ne"></span></li>

                        <li class="ui-state-default ui-corner-all" title=".ui-icon-triangle-1-e"><span class="ui-icon ui-icon-triangle-1-e"></span></li>
                        <li class="ui-state-default ui-corner-all" title=".ui-icon-triangle-1-se"><span class="ui-icon ui-icon-triangle-1-se"></span></li>
                        <li class="ui-state-default ui-corner-all" title=".ui-icon-triangle-1-s"><span class="ui-icon ui-icon-triangle-1-s"></span></li>
                        <li class="ui-state-default ui-corner-all" title=".ui-icon-triangle-1-sw"><span class="ui-icon ui-icon-triangle-1-sw"></span></li>
                        <li class="ui-state-default ui-corner-all" title=".ui-icon-triangle-1-w"><span class="ui-icon ui-icon-triangle-1-w"></span></li>
                        <li class="ui-state-default ui-corner-all" title=".ui-icon-triangle-1-nw"><span class="ui-icon ui-icon-triangle-1-nw"></span></li>
                        <li class="ui-state-default ui-corner-all" title=".ui-icon-triangle-2-n-s"><span class="ui-icon ui-icon-triangle-2-n-s"></span></li>

                        <li class="ui-state-default ui-corner-all" title=".ui-icon-triangle-2-e-w"><span class="ui-icon ui-icon-triangle-2-e-w"></span></li>
                        <li class="ui-state-default ui-corner-all" title=".ui-icon-arrow-1-n"><span class="ui-icon ui-icon-arrow-1-n"></span></li>

                        <li class="ui-state-default ui-corner-all" title=".ui-icon-arrow-1-ne"><span class="ui-icon ui-icon-arrow-1-ne"></span></li>
                        <li class="ui-state-default ui-corner-all" title=".ui-icon-arrow-1-e"><span class="ui-icon ui-icon-arrow-1-e"></span></li>
                        <li class="ui-state-default ui-corner-all" title=".ui-icon-arrow-1-se"><span class="ui-icon ui-icon-arrow-1-se"></span></li>
                        <li class="ui-state-default ui-corner-all" title=".ui-icon-arrow-1-s"><span class="ui-icon ui-icon-arrow-1-s"></span></li>
                        <li class="ui-state-default ui-corner-all" title=".ui-icon-arrow-1-sw"><span class="ui-icon ui-icon-arrow-1-sw"></span></li>
                        <li class="ui-state-default ui-corner-all" title=".ui-icon-arrow-1-w"><span class="ui-icon ui-icon-arrow-1-w"></span></li>
                        <li class="ui-state-default ui-corner-all" title=".ui-icon-arrow-1-nw"><span class="ui-icon ui-icon-arrow-1-nw"></span></li>

                        <li class="ui-state-default ui-corner-all" title=".ui-icon-arrow-2-n-s"><span class="ui-icon ui-icon-arrow-2-n-s"></span></li>
                        <li class="ui-state-default ui-corner-all" title=".ui-icon-arrow-2-ne-sw"><span class="ui-icon ui-icon-arrow-2-ne-sw"></span></li>

                        <li class="ui-state-default ui-corner-all" title=".ui-icon-arrow-2-e-w"><span class="ui-icon ui-icon-arrow-2-e-w"></span></li>
                        <li class="ui-state-default ui-corner-all" title=".ui-icon-arrow-2-se-nw"><span class="ui-icon ui-icon-arrow-2-se-nw"></span></li>
                        <li class="ui-state-default ui-corner-all" title=".ui-icon-arrowstop-1-n"><span class="ui-icon ui-icon-arrowstop-1-n"></span></li>
                        <li class="ui-state-default ui-corner-all" title=".ui-icon-arrowstop-1-e"><span class="ui-icon ui-icon-arrowstop-1-e"></span></li>
                        <li class="ui-state-default ui-corner-all" title=".ui-icon-arrowstop-1-s"><span class="ui-icon ui-icon-arrowstop-1-s"></span></li>
                        <li class="ui-state-default ui-corner-all" title=".ui-icon-arrowstop-1-w"><span class="ui-icon ui-icon-arrowstop-1-w"></span></li>
                        <li class="ui-state-default ui-corner-all" title=".ui-icon-arrowthick-1-n"><span class="ui-icon ui-icon-arrowthick-1-n"></span></li>

                        <li class="ui-state-default ui-corner-all" title=".ui-icon-arrowthick-1-ne"><span class="ui-icon ui-icon-arrowthick-1-ne"></span></li>
                        <li class="ui-state-default ui-corner-all" title=".ui-icon-arrowthick-1-e"><span class="ui-icon ui-icon-arrowthick-1-e"></span></li>

                        <li class="ui-state-default ui-corner-all" title=".ui-icon-arrowthick-1-se"><span class="ui-icon ui-icon-arrowthick-1-se"></span></li>
                        <li class="ui-state-default ui-corner-all" title=".ui-icon-arrowthick-1-s"><span class="ui-icon ui-icon-arrowthick-1-s"></span></li>
                        <li class="ui-state-default ui-corner-all" title=".ui-icon-arrowthick-1-sw"><span class="ui-icon ui-icon-arrowthick-1-sw"></span></li>
                        <li class="ui-state-default ui-corner-all" title=".ui-icon-arrowthick-1-w"><span class="ui-icon ui-icon-arrowthick-1-w"></span></li>
                        <li class="ui-state-default ui-corner-all" title=".ui-icon-arrowthick-1-nw"><span class="ui-icon ui-icon-arrowthick-1-nw"></span></li>
                        <li class="ui-state-default ui-corner-all" title=".ui-icon-arrowthick-2-n-s"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span></li>
                        <li class="ui-state-default ui-corner-all" title=".ui-icon-arrowthick-2-ne-sw"><span class="ui-icon ui-icon-arrowthick-2-ne-sw"></span></li>

                        <li class="ui-state-default ui-corner-all" title=".ui-icon-arrowthick-2-e-w"><span class="ui-icon ui-icon-arrowthick-2-e-w"></span></li>
                        <li class="ui-state-default ui-corner-all" title=".ui-icon-arrowthick-2-se-nw"><span class="ui-icon ui-icon-arrowthick-2-se-nw"></span></li>

                        <li class="ui-state-default ui-corner-all" title=".ui-icon-arrowthickstop-1-n"><span class="ui-icon ui-icon-arrowthickstop-1-n"></span></li>
                        <li class="ui-state-default ui-corner-all" title=".ui-icon-arrowthickstop-1-e"><span class="ui-icon ui-icon-arrowthickstop-1-e"></span></li>
                        <li class="ui-state-default ui-corner-all" title=".ui-icon-arrowthickstop-1-s"><span class="ui-icon ui-icon-arrowthickstop-1-s"></span></li>
                        <li class="ui-state-default ui-corner-all" title=".ui-icon-arrowthickstop-1-w"><span class="ui-icon ui-icon-arrowthickstop-1-w"></span></li>
                        <li class="ui-state-default ui-corner-all" title=".ui-icon-arrowreturnthick-1-w"><span class="ui-icon ui-icon-arrowreturnthick-1-w"></span></li>
                        <li class="ui-state-default ui-corner-all" title=".ui-icon-arrowreturnthick-1-n"><span class="ui-icon ui-icon-arrowreturnthick-1-n"></span></li>
                        <li class="ui-state-default ui-corner-all" title=".ui-icon-arrowreturnthick-1-e"><span class="ui-icon ui-icon-arrowreturnthick-1-e"></span></li>

                        <li class="ui-state-default ui-corner-all" title=".ui-icon-arrowreturnthick-1-s"><span class="ui-icon ui-icon-arrowreturnthick-1-s"></span></li>
                        <li class="ui-state-default ui-corner-all" title=".ui-icon-arrowreturn-1-w"><span class="ui-icon ui-icon-arrowreturn-1-w"></span></li>

                        <li class="ui-state-default ui-corner-all" title=".ui-icon-arrowreturn-1-n"><span class="ui-icon ui-icon-arrowreturn-1-n"></span></li>
                        <li class="ui-state-default ui-corner-all" title=".ui-icon-arrowreturn-1-e"><span class="ui-icon ui-icon-arrowreturn-1-e"></span></li>
                        <li class="ui-state-default ui-corner-all" title=".ui-icon-arrowreturn-1-s"><span class="ui-icon ui-icon-arrowreturn-1-s"></span></li>
                        <li class="ui-state-default ui-corner-all" title=".ui-icon-arrowrefresh-1-w"><span class="ui-icon ui-icon-arrowrefresh-1-w"></span></li>
                        <li class="ui-state-default ui-corner-all" title=".ui-icon-arrowrefresh-1-n"><span class="ui-icon ui-icon-arrowrefresh-1-n"></span></li>
                        <li class="ui-state-default ui-corner-all" title=".ui-icon-arrowrefresh-1-e"><span class="ui-icon ui-icon-arrowrefresh-1-e"></span></li>
                        <li class="ui-state-default ui-corner-all" title=".ui-icon-arrowrefresh-1-s"><span class="ui-icon ui-icon-arrowrefresh-1-s"></span></li>

                        <li class="ui-state-default ui-corner-all" title=".ui-icon-arrow-4"><span class="ui-icon ui-icon-arrow-4"></span></li>
                        <li class="ui-state-default ui-corner-all" title=".ui-icon-arrow-4-diag"><span class="ui-icon ui-icon-arrow-4-diag"></span></li>

                        <li class="ui-state-default ui-corner-all" title=".ui-icon-extlink"><span class="ui-icon ui-icon-extlink"></span></li>
                        <li class="ui-state-default ui-corner-all" title=".ui-icon-newwin"><span class="ui-icon ui-icon-newwin"></span></li>
                        <li class="ui-state-default ui-corner-all" title=".ui-icon-refresh"><span class="ui-icon ui-icon-refresh"></span></li>
                        <li class="ui-state-default ui-corner-all" title=".ui-icon-shuffle"><span class="ui-icon ui-icon-shuffle"></span></li>
                        <li class="ui-state-default ui-corner-all" title=".ui-icon-transfer-e-w"><span class="ui-icon ui-icon-transfer-e-w"></span></li>
                        <li class="ui-state-default ui-corner-all" title=".ui-icon-transferthick-e-w"><span class="ui-icon ui-icon-transferthick-e-w"></span></li>
                        <li class="ui-state-default ui-corner-all" title=".ui-icon-folder-collapsed"><span class="ui-icon ui-icon-folder-collapsed"></span></li>

                        <li class="ui-state-default ui-corner-all" title=".ui-icon-folder-open"><span class="ui-icon ui-icon-folder-open"></span></li>
                        <li class="ui-state-default ui-corner-all" title=".ui-icon-document"><span class="ui-icon ui-icon-document"></span></li>

                        <li class="ui-state-default ui-corner-all" title=".ui-icon-document-b"><span class="ui-icon ui-icon-document-b"></span></li>
                        <li class="ui-state-default ui-corner-all" title=".ui-icon-note"><span class="ui-icon ui-icon-note"></span></li>
                        <li class="ui-state-default ui-corner-all" title=".ui-icon-mail-closed"><span class="ui-icon ui-icon-mail-closed"></span></li>
                        <li class="ui-state-default ui-corner-all" title=".ui-icon-mail-open"><span class="ui-icon ui-icon-mail-open"></span></li>
                        <li class="ui-state-default ui-corner-all" title=".ui-icon-suitcase"><span class="ui-icon ui-icon-suitcase"></span></li>
                        <li class="ui-state-default ui-corner-all" title=".ui-icon-comment"><span class="ui-icon ui-icon-comment"></span></li>
                        <li class="ui-state-default ui-corner-all" title=".ui-icon-person"><span class="ui-icon ui-icon-person"></span></li>

                        <li class="ui-state-default ui-corner-all" title=".ui-icon-print"><span class="ui-icon ui-icon-print"></span></li>
                        <li class="ui-state-default ui-corner-all" title=".ui-icon-trash"><span class="ui-icon ui-icon-trash"></span></li>

                        <li class="ui-state-default ui-corner-all" title=".ui-icon-locked"><span class="ui-icon ui-icon-locked"></span></li>
                        <li class="ui-state-default ui-corner-all" title=".ui-icon-unlocked"><span class="ui-icon ui-icon-unlocked"></span></li>
                        <li class="ui-state-default ui-corner-all" title=".ui-icon-bookmark"><span class="ui-icon ui-icon-bookmark"></span></li>
                        <li class="ui-state-default ui-corner-all" title=".ui-icon-tag"><span class="ui-icon ui-icon-tag"></span></li>
                        <li class="ui-state-default ui-corner-all" title=".ui-icon-home"><span class="ui-icon ui-icon-home"></span></li>
                        <li class="ui-state-default ui-corner-all" title=".ui-icon-flag"><span class="ui-icon ui-icon-flag"></span></li>
                        <li class="ui-state-default ui-corner-all" title=".ui-icon-calculator"><span class="ui-icon ui-icon-calculator"></span></li>

                        <li class="ui-state-default ui-corner-all" title=".ui-icon-cart"><span class="ui-icon ui-icon-cart"></span></li>
                        <li class="ui-state-default ui-corner-all" title=".ui-icon-pencil"><span class="ui-icon ui-icon-pencil"></span></li>

                        <li class="ui-state-default ui-corner-all" title=".ui-icon-clock"><span class="ui-icon ui-icon-clock"></span></li>
                        <li class="ui-state-default ui-corner-all" title=".ui-icon-disk"><span class="ui-icon ui-icon-disk"></span></li>
                        <li class="ui-state-default ui-corner-all" title=".ui-icon-calendar"><span class="ui-icon ui-icon-calendar"></span></li>
                        <li class="ui-state-default ui-corner-all" title=".ui-icon-zoomin"><span class="ui-icon ui-icon-zoomin"></span></li>
                        <li class="ui-state-default ui-corner-all" title=".ui-icon-zoomout"><span class="ui-icon ui-icon-zoomout"></span></li>
                        <li class="ui-state-default ui-corner-all" title=".ui-icon-search"><span class="ui-icon ui-icon-search"></span></li>
                        <li class="ui-state-default ui-corner-all" title=".ui-icon-wrench"><span class="ui-icon ui-icon-wrench"></span></li>

                        <li class="ui-state-default ui-corner-all" title=".ui-icon-gear"><span class="ui-icon ui-icon-gear"></span></li>
                        <li class="ui-state-default ui-corner-all" title=".ui-icon-heart"><span class="ui-icon ui-icon-heart"></span></li>

                        <li class="ui-state-default ui-corner-all" title=".ui-icon-star"><span class="ui-icon ui-icon-star"></span></li>
                        <li class="ui-state-default ui-corner-all" title=".ui-icon-link"><span class="ui-icon ui-icon-link"></span></li>
                        <li class="ui-state-default ui-corner-all" title=".ui-icon-cancel"><span class="ui-icon ui-icon-cancel"></span></li>
                        <li class="ui-state-default ui-corner-all" title=".ui-icon-plus"><span class="ui-icon ui-icon-plus"></span></li>
                        <li class="ui-state-default ui-corner-all" title=".ui-icon-plusthick"><span class="ui-icon ui-icon-plusthick"></span></li>
                        <li class="ui-state-default ui-corner-all" title=".ui-icon-minus"><span class="ui-icon ui-icon-minus"></span></li>
                        <li class="ui-state-default ui-corner-all" title=".ui-icon-minusthick"><span class="ui-icon ui-icon-minusthick"></span></li>

                        <li class="ui-state-default ui-corner-all" title=".ui-icon-close"><span class="ui-icon ui-icon-close"></span></li>
                        <li class="ui-state-default ui-corner-all" title=".ui-icon-closethick"><span class="ui-icon ui-icon-closethick"></span></li>

                        <li class="ui-state-default ui-corner-all" title=".ui-icon-key"><span class="ui-icon ui-icon-key"></span></li>
                        <li class="ui-state-default ui-corner-all" title=".ui-icon-lightbulb"><span class="ui-icon ui-icon-lightbulb"></span></li>
                        <li class="ui-state-default ui-corner-all" title=".ui-icon-scissors"><span class="ui-icon ui-icon-scissors"></span></li>
                        <li class="ui-state-default ui-corner-all" title=".ui-icon-clipboard"><span class="ui-icon ui-icon-clipboard"></span></li>
                        <li class="ui-state-default ui-corner-all" title=".ui-icon-copy"><span class="ui-icon ui-icon-copy"></span></li>
                        <li class="ui-state-default ui-corner-all" title=".ui-icon-contact"><span class="ui-icon ui-icon-contact"></span></li>
                        <li class="ui-state-default ui-corner-all" title=".ui-icon-image"><span class="ui-icon ui-icon-image"></span></li>

                        <li class="ui-state-default ui-corner-all" title=".ui-icon-video"><span class="ui-icon ui-icon-video"></span></li>
                        <li class="ui-state-default ui-corner-all" title=".ui-icon-script"><span class="ui-icon ui-icon-script"></span></li>
                        <li class="ui-state-default ui-corner-all" title=".ui-icon-alert"><span class="ui-icon ui-icon-alert"></span></li>

                        <li class="ui-state-default ui-corner-all" title=".ui-icon-info"><span class="ui-icon ui-icon-info"></span></li>
                        <li class="ui-state-default ui-corner-all" title=".ui-icon-notice"><span class="ui-icon ui-icon-notice"></span></li>
                        <li class="ui-state-default ui-corner-all" title=".ui-icon-help"><span class="ui-icon ui-icon-help"></span></li>
                        <li class="ui-state-default ui-corner-all" title=".ui-icon-check"><span class="ui-icon ui-icon-check"></span></li>
                        <li class="ui-state-default ui-corner-all" title=".ui-icon-bullet"><span class="ui-icon ui-icon-bullet"></span></li>
                        <li class="ui-state-default ui-corner-all" title=".ui-icon-radio-off"><span class="ui-icon ui-icon-radio-off"></span></li>

                        <li class="ui-state-default ui-corner-all" title=".ui-icon-radio-on"><span class="ui-icon ui-icon-radio-on"></span></li>
                        <li class="ui-state-default ui-corner-all" title=".ui-icon-pin-w"><span class="ui-icon ui-icon-pin-w"></span></li>
                        <li class="ui-state-default ui-corner-all" title=".ui-icon-pin-s"><span class="ui-icon ui-icon-pin-s"></span></li>
                        <li class="ui-state-default ui-corner-all" title=".ui-icon-play"><span class="ui-icon ui-icon-play"></span></li>
                        <li class="ui-state-default ui-corner-all" title=".ui-icon-pause"><span class="ui-icon ui-icon-pause"></span></li>

                        <li class="ui-state-default ui-corner-all" title=".ui-icon-seek-next"><span class="ui-icon ui-icon-seek-next"></span></li>
                        <li class="ui-state-default ui-corner-all" title=".ui-icon-seek-prev"><span class="ui-icon ui-icon-seek-prev"></span></li>
                        <li class="ui-state-default ui-corner-all" title=".ui-icon-seek-end"><span class="ui-icon ui-icon-seek-end"></span></li>
                        <li class="ui-state-default ui-corner-all" title=".ui-icon-seek-first"><span class="ui-icon ui-icon-seek-first"></span></li>

                        <li class="ui-state-default ui-corner-all" title=".ui-icon-stop"><span class="ui-icon ui-icon-stop"></span></li>
                        <li class="ui-state-default ui-corner-all" title=".ui-icon-eject"><span class="ui-icon ui-icon-eject"></span></li>
                        <li class="ui-state-default ui-corner-all" title=".ui-icon-volume-off"><span class="ui-icon ui-icon-volume-off"></span></li>
                        <li class="ui-state-default ui-corner-all" title=".ui-icon-volume-on"><span class="ui-icon ui-icon-volume-on"></span></li>
                        <li class="ui-state-default ui-corner-all" title=".ui-icon-power"><span class="ui-icon ui-icon-power"></span></li>

                        <li class="ui-state-default ui-corner-all" title=".ui-icon-signal-diag"><span class="ui-icon ui-icon-signal-diag"></span></li>
                        <li class="ui-state-default ui-corner-all" title=".ui-icon-signal"><span class="ui-icon ui-icon-signal"></span></li>
                        <li class="ui-state-default ui-corner-all" title=".ui-icon-battery-0"><span class="ui-icon ui-icon-battery-0"></span></li>
                        <li class="ui-state-default ui-corner-all" title=".ui-icon-battery-1"><span class="ui-icon ui-icon-battery-1"></span></li>

                        <li class="ui-state-default ui-corner-all" title=".ui-icon-battery-2"><span class="ui-icon ui-icon-battery-2"></span></li>
                        <li class="ui-state-default ui-corner-all" title=".ui-icon-battery-3"><span class="ui-icon ui-icon-battery-3"></span></li>
                        <li class="ui-state-default ui-corner-all" title=".ui-icon-circle-plus"><span class="ui-icon ui-icon-circle-plus"></span></li>
                        <li class="ui-state-default ui-corner-all" title=".ui-icon-circle-minus"><span class="ui-icon ui-icon-circle-minus"></span></li>
                        <li class="ui-state-default ui-corner-all" title=".ui-icon-circle-close"><span class="ui-icon ui-icon-circle-close"></span></li>

                        <li class="ui-state-default ui-corner-all" title=".ui-icon-circle-triangle-e"><span class="ui-icon ui-icon-circle-triangle-e"></span></li>
                        <li class="ui-state-default ui-corner-all" title=".ui-icon-circle-triangle-s"><span class="ui-icon ui-icon-circle-triangle-s"></span></li>
                        <li class="ui-state-default ui-corner-all" title=".ui-icon-circle-triangle-w"><span class="ui-icon ui-icon-circle-triangle-w"></span></li>
                        <li class="ui-state-default ui-corner-all" title=".ui-icon-circle-triangle-n"><span class="ui-icon ui-icon-circle-triangle-n"></span></li>

                        <li class="ui-state-default ui-corner-all" title=".ui-icon-circle-arrow-e"><span class="ui-icon ui-icon-circle-arrow-e"></span></li>
                        <li class="ui-state-default ui-corner-all" title=".ui-icon-circle-arrow-s"><span class="ui-icon ui-icon-circle-arrow-s"></span></li>
                        <li class="ui-state-default ui-corner-all" title=".ui-icon-circle-arrow-w"><span class="ui-icon ui-icon-circle-arrow-w"></span></li>
                        <li class="ui-state-default ui-corner-all" title=".ui-icon-circle-arrow-n"><span class="ui-icon ui-icon-circle-arrow-n"></span></li>
                        <li class="ui-state-default ui-corner-all" title=".ui-icon-circle-zoomin"><span class="ui-icon ui-icon-circle-zoomin"></span></li>

                        <li class="ui-state-default ui-corner-all" title=".ui-icon-circle-zoomout"><span class="ui-icon ui-icon-circle-zoomout"></span></li>
                        <li class="ui-state-default ui-corner-all" title=".ui-icon-circle-check"><span class="ui-icon ui-icon-circle-check"></span></li>
                        <li class="ui-state-default ui-corner-all" title=".ui-icon-circlesmall-plus"><span class="ui-icon ui-icon-circlesmall-plus"></span></li>
                        <li class="ui-state-default ui-corner-all" title=".ui-icon-circlesmall-minus"><span class="ui-icon ui-icon-circlesmall-minus"></span></li>

                        <li class="ui-state-default ui-corner-all" title=".ui-icon-circlesmall-close"><span class="ui-icon ui-icon-circlesmall-close"></span></li>
                        <li class="ui-state-default ui-corner-all" title=".ui-icon-squaresmall-plus"><span class="ui-icon ui-icon-squaresmall-plus"></span></li>
                        <li class="ui-state-default ui-corner-all" title=".ui-icon-squaresmall-minus"><span class="ui-icon ui-icon-squaresmall-minus"></span></li>
                        <li class="ui-state-default ui-corner-all" title=".ui-icon-squaresmall-close"><span class="ui-icon ui-icon-squaresmall-close"></span></li>
                        <li class="ui-state-default ui-corner-all" title=".ui-icon-grip-dotted-vertical"><span class="ui-icon ui-icon-grip-dotted-vertical"></span></li>

                        <li class="ui-state-default ui-corner-all" title=".ui-icon-grip-dotted-horizontal"><span class="ui-icon ui-icon-grip-dotted-horizontal"></span></li>
                        <li class="ui-state-default ui-corner-all" title=".ui-icon-grip-solid-vertical"><span class="ui-icon ui-icon-grip-solid-vertical"></span></li>
                        <li class="ui-state-default ui-corner-all" title=".ui-icon-grip-solid-horizontal"><span class="ui-icon ui-icon-grip-solid-horizontal"></span></li>
                        <li class="ui-state-default ui-corner-all" title=".ui-icon-gripsmall-diagonal-se"><span class="ui-icon ui-icon-gripsmall-diagonal-se"></span></li>

                        <li class="ui-state-default ui-corner-all" title=".ui-icon-grip-diagonal-se"><span class="ui-icon ui-icon-grip-diagonal-se"></span></li>
                     </ul>

                  </div><!-- /#compGroupA -->


                  <div class="clearfix demo-col">

                     <!-- Slider -->
                     <h2 class="demoHeaders">Slider</h2>
                     <div id="slider"></div>

                     <!-- Datepicker -->
                     <h2 class="demoHeaders">Datepicker</h2>
                     <div id="datepicker"></div>

                     <!-- Progressbar -->
                     <h2 class="demoHeaders">Progressbar</h2>	
                     <div id="progressbar"></div>
                     <!-- light -->
                     <h2 class="demoHeaders">Light</h2>

                     <div class="ui-widget">
                        <div class="ui-state-light" style="margin-top: 20px; padding: 0 .7em;border-top:none;border-left:none;border-right:none;"> 
                           <p> Sample ui-state-light style.</p>
                        </div>
                     </div>

                     <!-- Highlight / Error -->
                     <h2 class="demoHeaders">Highlight / Error</h2>

                     <div class="ui-widget">
                        <div class="ui-state-highlight ui-corner-all" style="margin-top: 20px; padding: 0 .7em;"> 
                           <p><span class="ui-icon ui-icon-info" style="float: left; margin-right: .3em;"></span>
                           <strong>Hey!</strong> <a href="#">Sample</a> ui-state-highlight style.</p>
                        </div>
                     </div>
                     <br/>
                     <div class="ui-widget">

                        <div class="ui-state-error ui-corner-all" style="padding: 0 .7em;"> 
                           <p><span class="ui-icon ui-icon-alert" style="float: left; margin-right: .3em;"></span> 
                           <strong>Alert:</strong> <a href="#">Sample</a> ui-state-error style.</p>
                        </div>
                     </div>

                  </div><!-- /#compGroupB -->

               </div><!-- /#components -->

         </div>		</div>

   </body></html>
