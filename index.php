<?php require 'connection/connect.php'; ?>
<?php require 'includes/header.php'; ?>



<div class="container">
  <div class="wrapper">
    <div class="row">
      <h1>Service Tech Test</h1>
      <p>During this quiz, we ask you certain questions pertaining to the mechanic work you may experience in on of our shops. Please read and answer each quesiton completely. Thank you for your interest.</p>
    </div>
    <hr>
    <form action="thank-you.php" method="POST">
      <!-- Question 1 -->
      <div class="row form-group">
        <h3>1. What is your first and last name?</h3>
        <input class="form-control" type="text" name="givenname" placeholder="First and Last Name" required>
      </div>

      <!-- Question 2 -->
      <div class="row form-group">
        <h3>2. What is your email address?</h3>
        <input class="form-control" type="text" name="email" placeholder="name@example.com" required>
      </div>

      <!-- Question 3 -->
      <div class="row form-group">
        <h3>3. True or False: In a series circuit, current is the same at any point in the circuit?</h3>
        <div class="radio">
          <label><input type="radio" name="question3" value="1" required> True</label>
        </div>
        <div class="radio">
          <label><input type="radio" name="question3" value="2"> False</label>
        </div>
      </div>

      <!-- Question 4 -->
      <div class="row form-group">
        <h3>4. What type of combustion engine does the diagram below represent?</h3>
        <div class="col-lg-12 col-md-12 col-sm-12">
          <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <img class="img-responsive" src="imgs/four-stroke-engine.jpg" />
          </div>
        </div>
        <div class="radio">
          <label><input type="radio" name="question4" value="1" required> Gasoline</label>
        </div>
        <div class="radio">
          <label><input type="radio" name="question4" value="2"> Diesel</label>
        </div>
      </div>

      <!-- Quesiton 5 -->
      <div class="row form-group">
        <h3>5. If you test flow of a system and the flow is below specification, which of the following could be the cause?</h3>
        <div class="radio">
          <label><input type="radio" name="question5" value="1" required> The test pressure was above cracking pressure</label>
        </div>
        <div class="radio">
          <label><input type="radio" name="question5" value="2"> The test pressure was below cracking pressure</label>
        </div>
        <div class="radio">
          <label><input type="radio" name="question5" value="3"> The oil temperature was too low</label>
        </div>
        <div class="radio">
          <label><input type="radio" name="question5" value="4">The engine speed was too high</label>
        </div>
      </div>

      <!-- Question 6 -->
      <div class="row form-group">
        <h3>6. Determine the total resistance from the series circuit schematic below?</h3>
        <div class="col-lg-12 col-md-12 col-sm-12">
          <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <img class="img-responsive" src="imgs/ComboCircuit_Problem_Simplified.png" />
          </div>
        </div>
        <div class="radio">
          <label><input type="radio" name="question6" value="1" required> Rt = 4 ohms</label>
        </div>
        <div class="radio">
          <label><input type="radio" name="question6" value="2"> Rt = 3 ohms</label>
        </div>
        <div class="radio">
          <label><input type="radio" name="question6" value="3"> Rt = 12 ohms</label>
        </div>
        <div class="radio">
          <label><input type="radio" name="question6" value="4"> Rt = 1 ohms</label>
        </div>
      </div>

      <!-- Question 7 -->
      <div class="row form-group">
        <h3>7. What is the safety function of grade 2 shear bolts (or shear pin)?</h3>
        <div class="radio">
          <label><input type="radio" name="question7" value="1" required> Attach grade 2 metals securely</label>
        </div>
        <div class="radio">
          <label><input type="radio" name="question7" value"2"> Add weight to an implement</label>
        </div>
        <div class="radio">
          <label><input type="radio" name="question7" value="3"> Protective device designed to break at a certain level of force</label>
        </div>
        <div class="radio">
          <label><input type="radio" name="question7" value="4"> Hold the shear in place</label>
        </div>
        <div class="radio">
          <label><input type="radio" name="question7" value="5"> None of the above</label>
        </div>
      </div>

      <!-- Question 8 -->
      <div class="row form-group">
        <h3>8. The purpose of la hydraulic pump is to 'blank' in a hydraulic system.</h3>
        <div class="radio">
          <label><input type="radio" name="question8" value="1" required> Stop Flow</label>
        </div>
        <div class="radio">
          <label><input type="radio" name="question8" value="2"> Create Flow</label>
        </div>
        <div class="radio">
          <label><input type="radio" name="question8" value="3"> Direct Flow</label>
        </div>
        <div class="radio">
          <label><input type="radio" name="question8" value="4"> None of the above</label>
        </div>
      </div>

      <!-- Question 9 -->
      <div class="row form-group">
        <h3>9. ________ is the flow of electrons form one atom to another in a conductor.</h3>
        <div class="radio">
          <label><input type="radio" name="question9" value="1" required> Resistance</label>
        </div>
        <div class="radio">
          <label><input type="radio" name="question9" value="2"> Electricity</label>
        </div>
        <div class="radio">
          <label><input type="radio" name="question9" value="3"> Ohm's Law</label>
        </div>
        <div class="radio">
          <label><input type="radio" name="question9" value="4"> Voltage</label>
        </div>
      </div>

      <!-- Question 10 -->
      <div class="row form-group">
        <h3>10. What are the names of the two different wheels on a turbocharger that can spin up to 140,000 RPM?</h3>
        <div class="radio">
          <label><input type="radio" name="question10" value="1" required> Impeller and boost wheels</label>
        </div>
        <div class="radio">
          <label><input type="radio" name="question10" value="2"> Turbine and Compressor</label>
        </div>
        <div class="radio">
          <label><input type="radio" name="question10" value="3"> Vane and Rotor</label>
        </div>
        <div class="radio">
          <label><input type="radio" name="question10" value="4"> Exhaust and Intake</label>
        </div>
        <div class="radio">
          <label><input type="radio" name="question10" value="5"> None of the above</label>
        </div>
      </div>

      <!-- Question 11 -->
      <div class="row form-group">
        <h3>11. Which formula can be used to calculate Pascal's law?</h3>
        <ul>
          <li>Statement 1: F = P x A</li>
          <li>Statement 2: P = F/A</li>
          <li>Statement 3: A = F/P</li>
        </ul>
        <div class="radio">
          <label><input type="radio" name="question11" value="1" required> Statement 1 is true</label>
        </div>
        <div class="radio">
          <label><input type="radio" name="question11" value="2"> Statement 2 is true</label>
        </div>
        <div class="radio">
          <label><input type="radio" name="question11" value="3"> Statement 3 is true</label>
        </div>
        <div class="radio">
          <label><input type="radio" name="question11" value="4">All statements are true</label>
        </div>
      </div>

      <!-- Question 12 -->
      <div class="row form-group">
        <h3>12. In a typical gasoline engine, after a fuel/air mixture enters a cylinder and is compressed, what is need to properly ignite the mixture?</h3>
        <div class="radio">
          <label><input type="radio" name="question12" value="1" required> Carburetor</label>
        </div>
        <div class="radio">
          <label><input type="radio" name="question12" value="2"> Driveshaft</label>
        </div>
        <div class="radio">
          <label><input type="radio" name="question12" value="3"> Spark</label>
        </div>
        <div class="radio">
          <label><input type="radio" name="question12" value="4"> Gears</label>
        </div>
        <div class="radio">
          <label><input type="radio" name="question12" value="5"> None of the above</label>
        </div>
      </div>

      <!-- Question 13 -->
      <div class="row form-group">
        <h3>13. A _________ system allows flow to a reservoir when the system is in neutral.</h3>
        <div class="radio">
          <label><input type="radio" name="question13" value="1" required> Closed Center</label>
        </div>
        <div class="radio">
          <label><input type="radio" name="question13" value="2"> Reservoir</label>
        </div>
        <div class="radio">
          <label><input type="radio" name="question13" value="3"> Hydraulic</label>
        </div>
        <div class="radio">
          <label><input type="radio" name="question13" value="4"> Open Center</label>
        </div>
      </div>

      <!-- Question 14 -->
      <div class="row form-group">
        <h3>14. Symptoms of a clogged fuel filter are...</h3>
        <div class="radio">
          <label><input type="radio" name="question14" value="1" required> Engine difficult to start</label>
        </div>
        <div class="radio">
          <label><input type="radio" name="question14" value="2"> Engine idles rough</label>
        </div>
        <div class="radio">
          <label><input type="radio" name="question14" value="3"> Difficulty accelerating</label>
        </div>
        <div class="radio">
          <label><input type="radio" name="question14" value="4"> Exhaust fuems smell faul</label>
        </div>
        <div class="radio">
          <label><input type="radio" name="question14" value="5"> All of the above</label>
        </div>
      </div>

      <!-- Question 15 -->
      <div class="row form-group">
        <h3>15. Using Ohm's law, calculate the amps if volts = 12 and resistance = 4.</h3>
        <div class="radio">
          <label><input type="radio" name="question15" value="1" required> 3</label>
        </div>
        <div class="radio">
          <label><input type="radio" name="question15" value="2"> 5</label>
        </div>
        <div class="radio">
          <label><input type="radio" name="question15" value="3"> 2</label>
        </div>
        <div class="radio">
          <label><input type="radio" name="question15" value="4"> 4</label>
        </div>
      </div>

      <!-- Quesetion 16 -->
      <div class="row form-group">
        <h3>16. True or False: Hydraulic fluid will always follow the path of least resistance.</h3>
        <div class="radio">
          <label><input type="radio" name="question16" value="1" required> True</label>
        </div>
        <div class="radio">
          <label><input type="radio" name="question16" value="2"> False</label>
        </div>
      </div>

      <!-- Question 17 -->
      <div class="row form-group">
        <h3>17. Cylinder bore wear in an engine would be greatest...</h3>
        <div class="radio">
          <label><input type="radio" name="question17" value="1" required>At the top of piston travel, at the front &#38; rear of the bore</label>
        </div>
        <div class="radio">
          <label><input type="radio" name="question17" value="2"> At the top of ring travel, at the front &#38; rear of the bore</label>
        </div>
        <div class="radio">
          <label><input type="radio" name="question17" value="3"> At the top of ring travel, at the sides of the bore</label>
        </div>
        <div class="radio">
          <label><input type="radio" name="question17" value="4"> None of the above</label>
        </div>
      </div>

      <!-- Question 18 -->
      <div class="row form-group">
        <h3>18. The folowing statement, "total current is wqual to the sum of each branc current", is one of the laws of which circuit?</h3>
        <div class="radio">
          <label><input type="radio" name="question18" value="1" required> Series Circuit</label>
        </div>
        <div class="radio">
          <label><input type="radio" name="question18" value="2"> Parallel Circuit</label>
        </div>
        <div class="radio">
          <label><input type="radio" name="question18" value="3"> Series-parallel Circuit</label>
        </div>
      </div>

      <!-- Question 19 -->
      <div class="row form-group">
        <h3>19. Compared with a collar shift transmission, what is the main benefit of synchronized transmission?</h3>
        <div class="radio">
          <label><input type="radio" name="question19" value="1" required> Gears are largers and stronger</label>
        </div>
        <div class="radio">
          <label><input type="radio" name="question19" value="2"> Shift on the go</label>
        </div>
        <div class="radio">
          <label><input type="radio" name="question19" value="3"> Clutch-less shifting</label>
        </div>
        <div class="radio">
          <label><input type="radio" name="question19" value="4"> Easier to work on service</label>
        </div>
        <div class="radio">
          <label><input type="radio" name="question19" value="5"> None of the above</label>
        </div>
      </div>

      <!-- Question 20 -->
      <div class="row form-group">
        <h3>20. When reading a digital multi-meter, a capital M represents which answer below?</h3>
        <div class="radio">
          <label><input type="radio" name="question20" value="1" required> Kilo</label>
        </div>
        <div class="radio">
          <label><input type="radio" name="question20" value="2"> Mill</label>
        </div>
        <div class="radio">
          <label><input type="radio" name="question20" value="3"> Mega</label>
        </div>
        <div class="radio">
          <label><input type="radio" name="question20" value="4"> Million</label>
        </div>
      </div>

      <!-- Question 21 -->
      <div class="row form-group">
        <h3>21. Fuel-air mixture, ignition and _________ are needed to produce horsepower.</h3>
        <div class="radio">
          <label><input type="radio" name="question21" value="1" required> Concentration</label>
        </div>
        <div class="radio">
          <label><input type="radio" name="question21" value="2"> Torsion</label>
        </div>
        <div class="radio">
          <label><input type="radio" name="question21" value="3"> Compression</label>
        </div>
        <div class="radio">
          <label><input type="radio" name="question21" value="4"> Condensation</label>
        </div>
        <div class="radio">
          <label><input type="radio" name="question21" value="5"> None of the above</label>
        </div>
      </div>

      <!-- Question 22 -->
      <div class="row form-group">
        <h3>22. What happens when the flow in a hose (or orifice) is increased?</h3>
        <div class="radio">
          <label><input type="radio" name="question22" value="1" required> The pressure drop across it increases</label>
        </div>
        <div class="radio">
          <label><input type="radio" name="question22" value="2"> The pressure drop across it decreases</label>
        </div>
        <div class="radio">
          <label><input type="radio" name="question22" value="3"> The resistance of it increases</label>
        </div>
        <div class="radio">
          <label><input type="radio" name="question22" value="4"> The resistance of it decreases</label>
        </div>
      </div>

      <!-- Question 23 -->
      <div class="row form-group">
        <h3>23. Choose the correct statement below</h3>
        <div class="radio">
          <label><input type="radio" name="question23" value="1" required> R = electromotive force (volts), I = intensity (current), E = resistance (ohms)</label>
        </div>
        <div class="radio">
          <label><input type="radio" name="question23" value="2"> E = electromotive force (volts), I = intensity (current), E = resistance (ohms)</label>
        </div>
        <div class="radio">
          <label><input type="radio" name="question23" value="3"> I = electromotive force (volts), E = intensity (current), R = resistance (ohms)</label>
        </div>
      </div>

      <!-- Question 24 -->
      <div class="row form-group">
        <h3>24. In the image below, what are the arrows pointing to?</h3>
        <div class="col-lg-12 col-md-12 col-sm-12">
          <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <img class="img-responsive" src="imgs/piston-rings.gif" />
          </div>
        </div>
        <div class="radio">
          <label><input type="radio" name="question24" value="1" required> Compression Rings</label>
        </div>
        <div class="radio">
          <label><input type="radio" name="question24" value="2"> Control Sets</label>
        </div>
        <div class="radio">
          <label><input type="radio" name="question24" value="3"> Valves</label>
        </div>
        <div class="radio">
          <label><input type="radio" name="question24" value="4"> Piston Rods</label>
        </div>
        <div class="radio">
          <label><input type="radio" name="question24" value="5"> None of the above</label>
        </div>
      </div>

      <!-- Question 25 -->
      <div class="row form-group">
        <h3>25. The four cycles of air conditioning are...</h3>

        <div class="radio">
          <label><input type="radio" name="question25" value="1" required> Compression, drying, expansion, evaporation</label>
        </div>
        <div class="radio">
          <label><input type="radio" name="question25" value="2"> Compression, condensation, drying, evaporation</label>
        </div>
        <div class="radio">
          <label><input type="radio" name="question25" value="3"> Condensation, humidifying, expansion, evaporation</label>
        </div>
        <div class="radio">
          <label><input type="radio" name="question25" value="4"> Compression, condensation, expansion, evaportaion</label>
        </div>
      </div>

      <button type="submit" class="btn btn-success btn-lg">Submit Test</button>

    </form>
  </div>
</div>

</body>
</html>
