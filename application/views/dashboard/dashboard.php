<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <?= $this->session->flashdata('msgbox') ?>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-stats">
          <div class="card-header card-header-warning card-header-icon">
            <div class="card-icon">
              <i class="material-icons">content_copy</i>
            </div>
            <p class="card-category">Used Space</p>
            <h3 class="card-title">49/50
              <small>GB</small>
            </h3>
          </div>
          <div class="card-footer">
            <div class="stats">
              <i class="material-icons text-danger">warning</i>
              <a href="javascript:;">Get More Space...</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-stats">
          <div class="card-header card-header-success card-header-icon">
            <div class="card-icon">
              <i class="material-icons">store</i>
            </div>
            <p class="card-category">Revenue</p>
            <h3 class="card-title">$34,245</h3>
          </div>
          <div class="card-footer">
            <div class="stats">
              <i class="material-icons">date_range</i> Last 24 Hours
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-stats">
          <div class="card-header card-header-danger card-header-icon">
            <div class="card-icon">
              <i class="material-icons">info_outline</i>
            </div>
            <p class="card-category">Fixed Issues</p>
            <h3 class="card-title">75</h3>
          </div>
          <div class="card-footer">
            <div class="stats">
              <i class="material-icons">local_offer</i> Tracked from Github
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-stats">
          <div class="card-header card-header-info card-header-icon">
            <div class="card-icon">
              <i class="fa fa-twitter"></i>
            </div>
            <p class="card-category">Followers</p>
            <h3 class="card-title">+245</h3>
          </div>
          <div class="card-footer">
            <div class="stats">
              <i class="material-icons">update</i> Just Updated
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <div class="card card-chart">
          <div class="card-header card-header-success">
            <div class="ct-chart" id="dailySalesChart"><svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="100%" class="ct-chart-line" style="width: 100%; height: 100%;"><g class="ct-grids"><line x1="40" x2="40" y1="0" y2="119.60000610351562" class="ct-grid ct-horizontal"></line><line x1="80.76071602957589" x2="80.76071602957589" y1="0" y2="119.60000610351562" class="ct-grid ct-horizontal"></line><line x1="121.52143205915179" x2="121.52143205915179" y1="0" y2="119.60000610351562" class="ct-grid ct-horizontal"></line><line x1="162.2821480887277" x2="162.2821480887277" y1="0" y2="119.60000610351562" class="ct-grid ct-horizontal"></line><line x1="203.04286411830358" x2="203.04286411830358" y1="0" y2="119.60000610351562" class="ct-grid ct-horizontal"></line><line x1="243.80358014787947" x2="243.80358014787947" y1="0" y2="119.60000610351562" class="ct-grid ct-horizontal"></line><line x1="284.5642961774554" x2="284.5642961774554" y1="0" y2="119.60000610351562" class="ct-grid ct-horizontal"></line><line y1="119.60000610351562" y2="119.60000610351562" x1="40" x2="325.32501220703125" class="ct-grid ct-vertical"></line><line y1="95.6800048828125" y2="95.6800048828125" x1="40" x2="325.32501220703125" class="ct-grid ct-vertical"></line><line y1="71.76000366210937" y2="71.76000366210937" x1="40" x2="325.32501220703125" class="ct-grid ct-vertical"></line><line y1="47.840002441406256" y2="47.840002441406256" x1="40" x2="325.32501220703125" class="ct-grid ct-vertical"></line><line y1="23.920001220703128" y2="23.920001220703128" x1="40" x2="325.32501220703125" class="ct-grid ct-vertical"></line><line y1="0" y2="0" x1="40" x2="325.32501220703125" class="ct-grid ct-vertical"></line></g><g><g class="ct-series ct-series-a"><path d="M 40 90.896 C 80.761 78.936 80.761 78.936 80.761 78.936 C 121.521 102.856 121.521 102.856 121.521 102.856 C 162.282 78.936 162.282 78.936 162.282 78.936 C 203.043 64.584 203.043 64.584 203.043 64.584 C 243.804 76.544 243.804 76.544 243.804 76.544 C 284.564 28.704 284.564 28.704 284.564 28.704" class="ct-line"></path><line x1="40" y1="90.89600463867188" x2="40.01" y2="90.89600463867188" class="ct-point" ct:value="12" opacity="1"></line><line x1="80.76071602957589" y1="78.93600402832031" x2="80.7707160295759" y2="78.93600402832031" class="ct-point" ct:value="17" opacity="1"></line><line x1="121.52143205915179" y1="102.85600524902344" x2="121.5314320591518" y2="102.85600524902344" class="ct-point" ct:value="7" opacity="1"></line><line x1="162.2821480887277" y1="78.93600402832031" x2="162.29214808872769" y2="78.93600402832031" class="ct-point" ct:value="17" opacity="1"></line><line x1="203.04286411830358" y1="64.58400329589844" x2="203.05286411830357" y2="64.58400329589844" class="ct-point" ct:value="23" opacity="1"></line><line x1="243.80358014787947" y1="76.54400390625" x2="243.81358014787946" y2="76.54400390625" class="ct-point" ct:value="18" opacity="1"></line><line x1="284.5642961774554" y1="28.704001464843756" x2="284.5742961774554" y2="28.704001464843756" class="ct-point" ct:value="38" opacity="1"></line></g></g><g class="ct-labels"><foreignObject style="overflow: visible;" x="40" y="124.60000610351562" width="40.760716029575896" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 41px; height: 20px;">M</span></foreignObject><foreignObject style="overflow: visible;" x="80.76071602957589" y="124.60000610351562" width="40.760716029575896" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 41px; height: 20px;">T</span></foreignObject><foreignObject style="overflow: visible;" x="121.52143205915179" y="124.60000610351562" width="40.7607160295759" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 41px; height: 20px;">W</span></foreignObject><foreignObject style="overflow: visible;" x="162.2821480887277" y="124.60000610351562" width="40.76071602957589" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 41px; height: 20px;">T</span></foreignObject><foreignObject style="overflow: visible;" x="203.04286411830358" y="124.60000610351562" width="40.76071602957589" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 41px; height: 20px;">F</span></foreignObject><foreignObject style="overflow: visible;" x="243.80358014787947" y="124.60000610351562" width="40.76071602957592" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 41px; height: 20px;">S</span></foreignObject><foreignObject style="overflow: visible;" x="284.5642961774554" y="124.60000610351562" width="40.76071602957586" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 41px; height: 20px;">S</span></foreignObject><foreignObject style="overflow: visible;" y="95.6800048828125" x="0" height="23.920001220703124" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">0</span></foreignObject><foreignObject style="overflow: visible;" y="71.76000366210937" x="0" height="23.920001220703124" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">10</span></foreignObject><foreignObject style="overflow: visible;" y="47.84000244140625" x="0" height="23.92000122070312" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">20</span></foreignObject><foreignObject style="overflow: visible;" y="23.920001220703128" x="0" height="23.920001220703128" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">30</span></foreignObject><foreignObject style="overflow: visible;" y="0" x="0" height="23.920001220703128" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">40</span></foreignObject><foreignObject style="overflow: visible;" y="-30" x="0" height="30" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 30px; width: 30px;">50</span></foreignObject></g></svg></div>
          </div>
          <div class="card-body">
            <h4 class="card-title">Daily Sales</h4>
            <p class="card-category">
              <span class="text-success"><i class="fa fa-long-arrow-up"></i> 55% </span> increase in today sales.</p>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="material-icons">access_time</i> updated 4 minutes ago
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card card-chart">
            <div class="card-header card-header-warning">
              <div class="ct-chart" id="websiteViewsChart"><svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="100%" class="ct-chart-bar" style="width: 100%; height: 100%;"><g class="ct-grids"><line y1="119.60000610351562" y2="119.60000610351562" x1="40" x2="320.32501220703125" class="ct-grid ct-vertical"></line><line y1="95.6800048828125" y2="95.6800048828125" x1="40" x2="320.32501220703125" class="ct-grid ct-vertical"></line><line y1="71.76000366210937" y2="71.76000366210937" x1="40" x2="320.32501220703125" class="ct-grid ct-vertical"></line><line y1="47.840002441406256" y2="47.840002441406256" x1="40" x2="320.32501220703125" class="ct-grid ct-vertical"></line><line y1="23.920001220703128" y2="23.920001220703128" x1="40" x2="320.32501220703125" class="ct-grid ct-vertical"></line><line y1="0" y2="0" x1="40" x2="320.32501220703125" class="ct-grid ct-vertical"></line></g><g><g class="ct-series ct-series-a"><line x1="51.68020884195963" x2="51.68020884195963" y1="119.60000610351562" y2="54.77680279541016" class="ct-bar" ct:value="542" opacity="1"></line><line x1="75.0406265258789" x2="75.0406265258789" y1="119.60000610351562" y2="66.6172033996582" class="ct-bar" ct:value="443" opacity="1"></line><line x1="98.40104420979817" x2="98.40104420979817" y1="119.60000610351562" y2="81.32800415039063" class="ct-bar" ct:value="320" opacity="1"></line><line x1="121.76146189371745" x2="121.76146189371745" y1="119.60000610351562" y2="26.312001342773442" class="ct-bar" ct:value="780" opacity="1"></line><line x1="145.1218795776367" x2="145.1218795776367" y1="119.60000610351562" y2="53.46120272827149" class="ct-bar" ct:value="553" opacity="1"></line><line x1="168.48229726155597" x2="168.48229726155597" y1="119.60000610351562" y2="65.42120333862304" class="ct-bar" ct:value="453" opacity="1"></line><line x1="191.84271494547525" x2="191.84271494547525" y1="119.60000610351562" y2="80.61040411376953" class="ct-bar" ct:value="326" opacity="1"></line><line x1="215.2031326293945" x2="215.2031326293945" y1="119.60000610351562" y2="67.69360345458983" class="ct-bar" ct:value="434" opacity="1"></line><line x1="238.56355031331378" x2="238.56355031331378" y1="119.60000610351562" y2="51.667202636718756" class="ct-bar" ct:value="568" opacity="1"></line><line x1="261.9239679972331" x2="261.9239679972331" y1="119.60000610351562" y2="46.64400238037109" class="ct-bar" ct:value="610" opacity="1"></line><line x1="285.28438568115234" x2="285.28438568115234" y1="119.60000610351562" y2="29.182401489257813" class="ct-bar" ct:value="756" opacity="1"></line><line x1="308.6448033650716" x2="308.6448033650716" y1="119.60000610351562" y2="12.558000640869139" class="ct-bar" ct:value="895" opacity="1"></line></g></g><g class="ct-labels"><foreignObject style="overflow: visible;" x="40" y="124.60000610351562" width="23.36041768391927" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 23px; height: 20px;">J</span></foreignObject><foreignObject style="overflow: visible;" x="63.360417683919266" y="124.60000610351562" width="23.36041768391927" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 23px; height: 20px;">F</span></foreignObject><foreignObject style="overflow: visible;" x="86.72083536783853" y="124.60000610351562" width="23.360417683919273" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 23px; height: 20px;">M</span></foreignObject><foreignObject style="overflow: visible;" x="110.08125305175781" y="124.60000610351562" width="23.360417683919266" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 23px; height: 20px;">A</span></foreignObject><foreignObject style="overflow: visible;" x="133.44167073567706" y="124.60000610351562" width="23.360417683919266" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 23px; height: 20px;">M</span></foreignObject><foreignObject style="overflow: visible;" x="156.80208841959634" y="124.60000610351562" width="23.36041768391928" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 23px; height: 20px;">J</span></foreignObject><foreignObject style="overflow: visible;" x="180.16250610351562" y="124.60000610351562" width="23.360417683919252" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 23px; height: 20px;">J</span></foreignObject><foreignObject style="overflow: visible;" x="203.52292378743488" y="124.60000610351562" width="23.36041768391928" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 23px; height: 20px;">A</span></foreignObject><foreignObject style="overflow: visible;" x="226.88334147135416" y="124.60000610351562" width="23.36041768391928" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 23px; height: 20px;">S</span></foreignObject><foreignObject style="overflow: visible;" x="250.24375915527344" y="124.60000610351562" width="23.360417683919252" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 23px; height: 20px;">O</span></foreignObject><foreignObject style="overflow: visible;" x="273.6041768391927" y="124.60000610351562" width="23.360417683919252" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 23px; height: 20px;">N</span></foreignObject><foreignObject style="overflow: visible;" x="296.96459452311194" y="124.60000610351562" width="30" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 30px; height: 20px;">D</span></foreignObject><foreignObject style="overflow: visible;" y="95.6800048828125" x="0" height="23.920001220703124" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">0</span></foreignObject><foreignObject style="overflow: visible;" y="71.76000366210937" x="0" height="23.920001220703124" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">200</span></foreignObject><foreignObject style="overflow: visible;" y="47.84000244140625" x="0" height="23.92000122070312" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">400</span></foreignObject><foreignObject style="overflow: visible;" y="23.920001220703128" x="0" height="23.920001220703128" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">600</span></foreignObject><foreignObject style="overflow: visible;" y="0" x="0" height="23.920001220703128" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">800</span></foreignObject><foreignObject style="overflow: visible;" y="-30" x="0" height="30" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 30px; width: 30px;">1000</span></foreignObject></g></svg></div>
            </div>
            <div class="card-body">
              <h4 class="card-title">Email Subscriptions</h4>
              <p class="card-category">Last Campaign Performance</p>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="material-icons">access_time</i> campaign sent 2 days ago
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card card-chart">
            <div class="card-header card-header-danger">
              <div class="ct-chart" id="completedTasksChart"><svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="100%" class="ct-chart-line" style="width: 100%; height: 100%;"><g class="ct-grids"><line x1="40" x2="40" y1="0" y2="119.60000610351562" class="ct-grid ct-horizontal"></line><line x1="75.6656265258789" x2="75.6656265258789" y1="0" y2="119.60000610351562" class="ct-grid ct-horizontal"></line><line x1="111.33125305175781" x2="111.33125305175781" y1="0" y2="119.60000610351562" class="ct-grid ct-horizontal"></line><line x1="146.99687957763672" x2="146.99687957763672" y1="0" y2="119.60000610351562" class="ct-grid ct-horizontal"></line><line x1="182.66250610351562" x2="182.66250610351562" y1="0" y2="119.60000610351562" class="ct-grid ct-horizontal"></line><line x1="218.32813262939453" x2="218.32813262939453" y1="0" y2="119.60000610351562" class="ct-grid ct-horizontal"></line><line x1="253.99375915527344" x2="253.99375915527344" y1="0" y2="119.60000610351562" class="ct-grid ct-horizontal"></line><line x1="289.65938568115234" x2="289.65938568115234" y1="0" y2="119.60000610351562" class="ct-grid ct-horizontal"></line><line y1="119.60000610351562" y2="119.60000610351562" x1="40" x2="325.32501220703125" class="ct-grid ct-vertical"></line><line y1="95.6800048828125" y2="95.6800048828125" x1="40" x2="325.32501220703125" class="ct-grid ct-vertical"></line><line y1="71.76000366210937" y2="71.76000366210937" x1="40" x2="325.32501220703125" class="ct-grid ct-vertical"></line><line y1="47.840002441406256" y2="47.840002441406256" x1="40" x2="325.32501220703125" class="ct-grid ct-vertical"></line><line y1="23.920001220703128" y2="23.920001220703128" x1="40" x2="325.32501220703125" class="ct-grid ct-vertical"></line><line y1="0" y2="0" x1="40" x2="325.32501220703125" class="ct-grid ct-vertical"></line></g><g><g class="ct-series ct-series-a"><path d="M 40 92.092 C 75.666 29.9 75.666 29.9 75.666 29.9 C 111.331 65.78 111.331 65.78 111.331 65.78 C 146.997 83.72 146.997 83.72 146.997 83.72 C 182.663 86.112 182.663 86.112 182.663 86.112 C 218.328 90.896 218.328 90.896 218.328 90.896 C 253.994 95.68 253.994 95.68 253.994 95.68 C 289.659 96.876 289.659 96.876 289.659 96.876" class="ct-line"></path><line x1="40" y1="92.09200469970703" x2="40.01" y2="92.09200469970703" class="ct-point" ct:value="230" opacity="1"></line><line x1="75.6656265258789" y1="29.900001525878906" x2="75.67562652587891" y2="29.900001525878906" class="ct-point" ct:value="750" opacity="1"></line><line x1="111.33125305175781" y1="65.78000335693359" x2="111.34125305175782" y2="65.78000335693359" class="ct-point" ct:value="450" opacity="1"></line><line x1="146.99687957763672" y1="83.72000427246094" x2="147.0068795776367" y2="83.72000427246094" class="ct-point" ct:value="300" opacity="1"></line><line x1="182.66250610351562" y1="86.11200439453125" x2="182.67250610351562" y2="86.11200439453125" class="ct-point" ct:value="280" opacity="1"></line><line x1="218.32813262939453" y1="90.89600463867188" x2="218.33813262939452" y2="90.89600463867188" class="ct-point" ct:value="240" opacity="1"></line><line x1="253.99375915527344" y1="95.6800048828125" x2="254.00375915527343" y2="95.6800048828125" class="ct-point" ct:value="200" opacity="1"></line><line x1="289.65938568115234" y1="96.87600494384766" x2="289.66938568115233" y2="96.87600494384766" class="ct-point" ct:value="190" opacity="1"></line></g></g><g class="ct-labels"><foreignObject style="overflow: visible;" x="40" y="124.60000610351562" width="35.665626525878906" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 36px; height: 20px;">12p</span></foreignObject><foreignObject style="overflow: visible;" x="75.6656265258789" y="124.60000610351562" width="35.665626525878906" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 36px; height: 20px;">3p</span></foreignObject><foreignObject style="overflow: visible;" x="111.33125305175781" y="124.60000610351562" width="35.665626525878906" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 36px; height: 20px;">6p</span></foreignObject><foreignObject style="overflow: visible;" x="146.99687957763672" y="124.60000610351562" width="35.665626525878906" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 36px; height: 20px;">9p</span></foreignObject><foreignObject style="overflow: visible;" x="182.66250610351562" y="124.60000610351562" width="35.665626525878906" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 36px; height: 20px;">12p</span></foreignObject><foreignObject style="overflow: visible;" x="218.32813262939453" y="124.60000610351562" width="35.665626525878906" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 36px; height: 20px;">3a</span></foreignObject><foreignObject style="overflow: visible;" x="253.99375915527344" y="124.60000610351562" width="35.665626525878906" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 36px; height: 20px;">6a</span></foreignObject><foreignObject style="overflow: visible;" x="289.65938568115234" y="124.60000610351562" width="35.665626525878906" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 36px; height: 20px;">9a</span></foreignObject><foreignObject style="overflow: visible;" y="95.6800048828125" x="0" height="23.920001220703124" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">0</span></foreignObject><foreignObject style="overflow: visible;" y="71.76000366210937" x="0" height="23.920001220703124" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">200</span></foreignObject><foreignObject style="overflow: visible;" y="47.84000244140625" x="0" height="23.92000122070312" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">400</span></foreignObject><foreignObject style="overflow: visible;" y="23.920001220703128" x="0" height="23.920001220703128" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">600</span></foreignObject><foreignObject style="overflow: visible;" y="0" x="0" height="23.920001220703128" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">800</span></foreignObject><foreignObject style="overflow: visible;" y="-30" x="0" height="30" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 30px; width: 30px;">1000</span></foreignObject></g></svg></div>
            </div>
            <div class="card-body">
              <h4 class="card-title">Completed Tasks</h4>
              <p class="card-category">Last Campaign Performance</p>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="material-icons">access_time</i> campaign sent 2 days ago
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6 col-md-12">
          <div class="card">
            <div class="card-header card-header-tabs card-header-primary">
              <div class="nav-tabs-navigation">
                <div class="nav-tabs-wrapper">
                  <span class="nav-tabs-title">Tasks:</span>
                  <ul class="nav nav-tabs" data-tabs="tabs">
                    <li class="nav-item">
                      <a class="nav-link active" href="#profile" data-toggle="tab">
                        <i class="material-icons">bug_report</i> Bugs
                        <div class="ripple-container"></div>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#messages" data-toggle="tab">
                        <i class="material-icons">code</i> Website
                        <div class="ripple-container"></div>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#settings" data-toggle="tab">
                        <i class="material-icons">cloud</i> Server
                        <div class="ripple-container"></div>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="card-body">
              <div class="tab-content">
                <div class="tab-pane active" id="profile">
                  <table class="table">
                    <tbody>
                      <tr>
                        <td>
                          <div class="form-check">
                            <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" value="" checked="">
                              <span class="form-check-sign">
                                <span class="check"></span>
                              </span>
                            </label>
                          </div>
                        </td>
                        <td>Sign contract for "What are conference organizers afraid of?"</td>
                        <td class="td-actions text-right">
                          <button type="button" rel="tooltip" title="" class="btn btn-primary btn-link btn-sm" data-original-title="Edit Task">
                            <i class="material-icons">edit</i>
                          </button>
                          <button type="button" rel="tooltip" title="" class="btn btn-danger btn-link btn-sm" data-original-title="Remove">
                            <i class="material-icons">close</i>
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="form-check">
                            <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" value="">
                              <span class="form-check-sign">
                                <span class="check"></span>
                              </span>
                            </label>
                          </div>
                        </td>
                        <td>Lines From Great Russian Literature? Or E-mails From My Boss?</td>
                        <td class="td-actions text-right">
                          <button type="button" rel="tooltip" title="" class="btn btn-primary btn-link btn-sm" data-original-title="Edit Task">
                            <i class="material-icons">edit</i>
                          </button>
                          <button type="button" rel="tooltip" title="" class="btn btn-danger btn-link btn-sm" data-original-title="Remove">
                            <i class="material-icons">close</i>
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="form-check">
                            <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" value="">
                              <span class="form-check-sign">
                                <span class="check"></span>
                              </span>
                            </label>
                          </div>
                        </td>
                        <td>Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
                        </td>
                        <td class="td-actions text-right">
                          <button type="button" rel="tooltip" title="" class="btn btn-primary btn-link btn-sm" data-original-title="Edit Task">
                            <i class="material-icons">edit</i>
                          </button>
                          <button type="button" rel="tooltip" title="" class="btn btn-danger btn-link btn-sm" data-original-title="Remove">
                            <i class="material-icons">close</i>
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="form-check">
                            <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" value="" checked="">
                              <span class="form-check-sign">
                                <span class="check"></span>
                              </span>
                            </label>
                          </div>
                        </td>
                        <td>Create 4 Invisible User Experiences you Never Knew About</td>
                        <td class="td-actions text-right">
                          <button type="button" rel="tooltip" title="" class="btn btn-primary btn-link btn-sm" data-original-title="Edit Task">
                            <i class="material-icons">edit</i>
                          </button>
                          <button type="button" rel="tooltip" title="" class="btn btn-danger btn-link btn-sm" data-original-title="Remove">
                            <i class="material-icons">close</i>
                          </button>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="tab-pane" id="messages">
                  <table class="table">
                    <tbody>
                      <tr>
                        <td>
                          <div class="form-check">
                            <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" value="" checked="">
                              <span class="form-check-sign">
                                <span class="check"></span>
                              </span>
                            </label>
                          </div>
                        </td>
                        <td>Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
                        </td>
                        <td class="td-actions text-right">
                          <button type="button" rel="tooltip" title="" class="btn btn-primary btn-link btn-sm" data-original-title="Edit Task">
                            <i class="material-icons">edit</i>
                          </button>
                          <button type="button" rel="tooltip" title="" class="btn btn-danger btn-link btn-sm" data-original-title="Remove">
                            <i class="material-icons">close</i>
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="form-check">
                            <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" value="">
                              <span class="form-check-sign">
                                <span class="check"></span>
                              </span>
                            </label>
                          </div>
                        </td>
                        <td>Sign contract for "What are conference organizers afraid of?"</td>
                        <td class="td-actions text-right">
                          <button type="button" rel="tooltip" title="" class="btn btn-primary btn-link btn-sm" data-original-title="Edit Task">
                            <i class="material-icons">edit</i>
                          </button>
                          <button type="button" rel="tooltip" title="" class="btn btn-danger btn-link btn-sm" data-original-title="Remove">
                            <i class="material-icons">close</i>
                          </button>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="tab-pane" id="settings">
                  <table class="table">
                    <tbody>
                      <tr>
                        <td>
                          <div class="form-check">
                            <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" value="">
                              <span class="form-check-sign">
                                <span class="check"></span>
                              </span>
                            </label>
                          </div>
                        </td>
                        <td>Lines From Great Russian Literature? Or E-mails From My Boss?</td>
                        <td class="td-actions text-right">
                          <button type="button" rel="tooltip" title="" class="btn btn-primary btn-link btn-sm" data-original-title="Edit Task">
                            <i class="material-icons">edit</i>
                          </button>
                          <button type="button" rel="tooltip" title="" class="btn btn-danger btn-link btn-sm" data-original-title="Remove">
                            <i class="material-icons">close</i>
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="form-check">
                            <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" value="" checked="">
                              <span class="form-check-sign">
                                <span class="check"></span>
                              </span>
                            </label>
                          </div>
                        </td>
                        <td>Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
                        </td>
                        <td class="td-actions text-right">
                          <button type="button" rel="tooltip" title="" class="btn btn-primary btn-link btn-sm" data-original-title="Edit Task">
                            <i class="material-icons">edit</i>
                          </button>
                          <button type="button" rel="tooltip" title="" class="btn btn-danger btn-link btn-sm" data-original-title="Remove">
                            <i class="material-icons">close</i>
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="form-check">
                            <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" value="" checked="">
                              <span class="form-check-sign">
                                <span class="check"></span>
                              </span>
                            </label>
                          </div>
                        </td>
                        <td>Sign contract for "What are conference organizers afraid of?"</td>
                        <td class="td-actions text-right">
                          <button type="button" rel="tooltip" title="" class="btn btn-primary btn-link btn-sm" data-original-title="Edit Task">
                            <i class="material-icons">edit</i>
                          </button>
                          <button type="button" rel="tooltip" title="" class="btn btn-danger btn-link btn-sm" data-original-title="Remove">
                            <i class="material-icons">close</i>
                          </button>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-12">
          <div class="card">
            <div class="card-header card-header-warning">
              <h4 class="card-title">Employees Stats</h4>
              <p class="card-category">New employees on 15th September, 2016</p>
            </div>
            <div class="card-body table-responsive">
              <table class="table table-hover">
                <thead class="text-warning">
                  <tr><th>ID</th>
                    <th>Name</th>
                    <th>Salary</th>
                    <th>Country</th>
                  </tr></thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>Dakota Rice</td>
                      <td>$36,738</td>
                      <td>Niger</td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>Minerva Hooper</td>
                      <td>$23,789</td>
                      <td>Curaçao</td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>Sage Rodriguez</td>
                      <td>$56,142</td>
                      <td>Netherlands</td>
                    </tr>
                    <tr>
                      <td>4</td>
                      <td>Philip Chaney</td>
                      <td>$38,735</td>
                      <td>Korea, South</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>