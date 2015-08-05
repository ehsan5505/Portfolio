
      <div class="elect">
        <div class="row">
          <div class="large-12 columns intro-text">
            <p><strong>Electronics Engineer.</strong></p> 
            <!--<img/ src="img/hawk.jpg" />-->
        
          </div>
        </div>
      </div>



      <div class="row about">
        <div class="medium-6 large-8 columns">
          <h4>Electronics</h4>
          <p>Done graduation in Electronics Engineer passionate for Internet over things, perform more than tens of project in academic life and still on going with it.</p>
          <p>There are the thousands of possibilty to create the imagination to life just need creativity and imagination. </p>
          
          <dl>
            <dt>Final Year Project</dt>
            <dd><p><acronym title="Computer Numeric Control">CNC</acronym> is our final Year Project which use to manupulate mechanical object using <acronym title="Computer Aided Designing">CAD</acronym>.
            Project consist of many small embedded system i.e. raspberry pi, arduino and wifi device. Dedication Power Management System, Panel Design and PCB router.
            </p>
            <p>System is initialize by the CAD graphics design in AutoCAD or any other 3D software. CAD generate G-code which is mechanical code for movement and rotation of motors. The g-coding program
             pass through the wifi link to the CNC machine which interpret G-Code by Java base software and generate PWM for the motors to move in particular direction at particular time slot. RPi is 
             use to manage the system interval and other computer and networking controls while arduino use for PWM and motor sequencing. Other dedicate system also added my the design preferences.</p>
            </dd>
            <dt>Academic Projects</dt>
            <dd>There are various project that been perform in academic life which consist from temperature control system to FPGA base Vending Machine. Project oriented mind set driven from early academic
             life generate a thrill and passion to invent new Electronics gadget. Thrill continue to be a part of <em>Internet over things</em> which drive Electronics to the web and control the 
             Electronics gadget through smart apps on your iPhone or any other handhield equipment.</dd>
          </dl>
          
          
          
        </div>
        
        <ul class="clearing-thumbs clearing-feature" data-clearing>
          <!--<li><a href="path/to/your/img"><img src="../../img/electronics/project.jpg"></a></li>-->
          <li class="clearing-featured-img"><a id="sdp" href="../../img/electronics/project.jpg"><img src="../../img/electronics/project.jpg"></a></li>
          
        </ul>
        
              <a href="#progPrjSummary" class="button default small radius" data-reveal-id="progPrjSummary">Projects</a>
              <a href="#progSummary" class="button default small radius" data-reveal-id="progSummary">Academics</a>
                
               <?php include "template/electronics/academicsModal.php" ?>
               <?php include "template/electronics/projectModal.php" ?>

      </div>
      <div class="row work">
        <hr>
        <div class="large-12 columns">
          <h4>Work</h4>
          <p>Click on each image to view my work!</p>

          <ul class="clearing-thumbs small-block-grid-1 medium-block-grid-2 large-block-grid-4" data-clearing>
            <li>
              <a href="?nav=prog"><img data-caption="Programming" src="../../img/home/osd.png"></a>
            </li>
            <li>
              <a href="?nav=elect"><img data-caption="Electronics" src="../../img/home/rasp.jpeg"></a>
            </li>
            <li>
              <a href="?nav=prj" data-reveal-id="remainModal"><img data-caption="Projects..." src="../../img/home/project.jpg"></a>
            </li>
            <li>
              <a href="?nav=exp" data-reveal-id="remainModal"><img data-caption="Experience" src="../../img/home/gfkEtilize.png"></a>
            </li>
          </ul>
        </div>
      </div>
