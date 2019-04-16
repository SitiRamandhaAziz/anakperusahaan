<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  


<div class="container">
       <table class="table table-striped">
          <tbody>
             <tr>
                <td colspan="1">
                   <form class="well form-horizontal"> 
                  
                   <?php echo form_open('FormNeraca/simpan') ?>
                   <h3>Neraca-Aset</h3>
                      <fieldset>
                      <div class="form-group" id="pilihlap">
                        <label class="col-md-4 control-label">Pilih laporan</label>
                        <div class= "col-md-8">
                         <select class="form-control">
                         <option selected>Budget</option>
                          <option value="1">Realisasi</option>
                          <option value="2">Budget dan Realisasi</option>
                        </select>
                        </div>
                        </div>
                        <div class="form-group" id="budget/realisasi">
                            <label class="col-md-4 control-label">Kas dan setara kas</label>
                            <div class="col-md-8 inputGroupContainer">
                               <!--div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span><input id="fullName" name="fullName" placeholder="Full Name" class="form-control" required="true" value="" type="text"></div-->
                               <input type="text" class="form-control" id="kas-setara-kas">
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Piutang usaha</label>
                            <div class="col-md-8 inputGroupContainer">
                               <!--div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="addressLine1" name="addressLine1" placeholder="Address Line 1" class="form-control" required="true" value="" type="text"></div-->
                               <input type="text" class="form-control" id="piutang-usaha">
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Piutang pihak berelasi</label>
                            <div class="col-md-8 inputGroupContainer">
                               <!--div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="addressLine2" name="addressLine2" placeholder="Address Line 2" class="form-control" required="true" value="" type="text"></div-->
                               <input type="text" class="form-control" id="piutang-pihak-berelasi">
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Piutang lain lain</label>
                            <div class="col-md-8 inputGroupContainer">
                               <!--div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="city" name="city" placeholder="City" class="form-control" required="true" value="" type="text"></div-->
                               <input type="text" class="form-control" id="piutang-lain-lain">
                            </div>
                         </div>
                         <!--div class="form-group">
                            <label class="col-md-4 control-label">State/Province/Region</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="state" name="state" placeholder="State/Province/Region" class="form-control" required="true" value="" type="text"></div>
                            </div>
                         </div-->
                         <!--div class="form-group">
                            <label class="col-md-4 control-label">Postal Code/ZIP</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="postcode" name="postcode" placeholder="Postal Code/ZIP" class="form-control" required="true" value="" type="text"></div>
                            </div>
                         </div-->
                         <!--div class="form-group">
                            <label class="col-md-4 control-label">Country</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group">
                                  <span class="input-group-addon" style="max-width: 100%;"><i class="glyphicon glyphicon-list"></i></span>
                                  <select class="selectpicker form-control">
                                     <option>A really long option to push the menu over the edget</option>
                                  </select>
                               </div>
                            </div>
                         </div-->
                         <!--div class="form-group">
                            <label class="col-md-4 control-label">Email</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span><input id="email" name="email" placeholder="Email" class="form-control" required="true" value="" type="text"></div>
                            </div>
                         </div-->
                         <!--div class="form-group">
                            <label class="col-md-4 control-label">Phone Number</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span><input id="phoneNumber" name="phoneNumber" placeholder="Phone Number" class="form-control" required="true" value="" type="text"></div>
                            </div>
                         </div-->
                      </fieldset>
                   </form>
                  
                </td>
                <!--BARIS KEDUA-->
                <tr>
                <td colspan="1">
                   <form class="well form-horizontal">
                    <h3>Neraca-Kewajiban</h3>
                      <fieldset>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Utang usaha</label>
                            <div class="col-md-8 inputGroupContainer">
                               <!--div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span><input id="fullName" name="fullName" placeholder="Full Name" class="form-control" required="true" value="" type="text"></div-->
                                 <input type="text" class="form-control" id="utang-usaha">
                            </div>

                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Utang pajak</label>
                            <div class="col-md-8 inputGroupContainer">
                               <!--div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="addressLine1" name="addressLine1" placeholder="Address Line 1" class="form-control" required="true" value="" type="text"></div-->
                               <input type="text" class="form-control" id="utang-pajak">
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Utang sewa pembiayaan jangka panjang</label>
                            <div class="col-md-8 inputGroupContainer">
                               <!--div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="addressLine2" name="addressLine2" placeholder="Address Line 2" class="form-control" required="true" value="" type="text"></div-->
                               <input type="text" class="form-control" id="utang-sewa-pjp">
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Utang bunga sewa pembiayaan jangka panjang</label>
                            <div class="col-md-8 inputGroupContainer">
                               <!--div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="city" name="city" placeholder="City" class="form-control" required="true" value="" type="text"></div-->
                               <input type="text" class="form-control" id="utang-bunga-sewa-jp">
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Utang pihak berelasi</label>
                            <div class="col-md-8 inputGroupContainer">
                               <!--div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="state" name="state" placeholder="State/Province/Region" class="form-control" required="true" value="" type="text"></div-->
                               <input type ="text" class ="form-control" id="utang-pihak-berelasi">
                            </div>
                         </div>
                         <!--div class="form-group">
                            <label class="col-md-4 control-label">Postal Code/ZIP</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="postcode" name="postcode" placeholder="Postal Code/ZIP" class="form-control" required="true" value="" type="text"></div>
                            </div>
                         </div-->
                         <!--div class="form-group"-->
                            <!--div class="form-group">
                            <label class="col-md-4 control-label">Country</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group">
                                  <span class="input-group-addon" style="max-width: 100%;"><i class="glyphicon glyphicon-list"></i></span>
                                  <select class="selectpicker form-control">
                                     <option>A really long option to push the menu over the edget</option>
                                  </select>
                               </div>
                            </div>
                         </div-->
                         <!--div class="form-group">
                            <label class="col-md-4 control-label">Email</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span><input id="email" name="email" placeholder="Email" class="form-control" required="true" value="" type="text"></div>
                            </div>
                         </div-->
                         <!--div class="form-group">
                            <label class="col-md-4 control-label">Phone Number</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span><input id="phoneNumber" name="phoneNumber" placeholder="Phone Number" class="form-control" required="true" value="" type="text"></div>
                            </div>
                         </div-->
                      </fieldset>
                      <div class= "container"> 
                       <!--button type="button" class="btn btn-outline-primary center-block">Simpan</button-->
                       <button type="submit" value="simpan" name="save" class="btn btn-outline-primary center-block">Simpan</button>
                             
                        <?php echo form_close() ?>
                      </div>
                   </form>
                </td>
             </tr>
          </tbody>
       </table>
    </div>