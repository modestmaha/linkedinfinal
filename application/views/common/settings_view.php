<div class="row-fluid">
        <!-- <div class="span3">
          <div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li class="nav-header">Sidebar</li>
              <li class="active"><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
              <li class="nav-header">Sidebar</li>
              <li><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
              <li class="nav-header">Sidebar</li>
              <li><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
            </ul>
          </div>
        </div> -->
        <div class="span9">
          <div class="hero-unit">
            <h2>Settings</h2>
            <!-- mailchimp form -->
            <div class="well">
              <fieldset>
              <legend>MailChimp API</legend>
              <?php if($MCkey){ ?>
                <p class="alert alert-success" ><b>Key:</b> <i><strong><?php echo $MCkey; ?></strong></i><br>
                  <b>List:</b> <i><strong><?php echo $McList; ?></strong></i><a class="pull-right" id="changeMC">Change</a></p>
              <?php }elseif($MCkey == ''){ ?>
                <script>
                 $(document).ready(function() {
                    $('.MCkeyform').show();
                  });
                </script>
              <?php } ?>
              <div class="MCkeyform">
                <form class="form-inline" name="frm_MC" id="frm_MC" method="post" action="<?php echo $actionMC; ?>">
                  <input type="hidden" name="type" value="MC">
                   <input type="text" class="input-large" id="key" name="key" placeholder="MailChimp Api Key">
                   <input type="button" class="btn btn-mini btn-primary" id="get_list" value="Get List">
                   <select name="MC_lsit" id="MClists">
                      <option value="0">Select a List</option>
                    </select>
                   <button type="submit" class="btn">Submit</button>
                   <span id="closeMcFrm" class="icon-remove pull-right">&nbsp;</span>
                </form>

              </div>
            </fieldset>
            </div>
            <div class="well">
              <fieldset>
              <legend>Mandrill API</legend>
              <?php if($MDkey){ ?>
                <p class="alert alert-success" ><b>Key:</b> <i><strong><?php echo $MDkey; ?></strong></i>
                  <a class="pull-right" id="changeMD">Change</a></p>
              <?php }elseif($MDkey == ''){ ?>
                <script>
                 $(document).ready(function() {
                    $('.MDkeyform').show();
                  });
                </script>
              <?php } ?>
              <div class="MDkeyform">
                <form class="form-inline" name="frm_MD" id="frm_MD" method="post" action="<?php echo $actionMD; ?>">
                  <input type="hidden" name="type" value="MC">
                  <input type="text" class="input-large" id="key" name="key" placeholder="Mandrill Api Key">
                  <button type="submit" class="btn">Submit</button>
                  <span id="closeMdFrm" class="icon-remove pull-right">&nbsp;</span>
                </form>

              </div>
            </fieldset>
            </div>
          </div>   
        </div><!--/span-->
      </div><!--/row-->
      <?php if($getShop){?>
      <script>
        $(document).ready(function() {
            $('.show').show();
            $('.edit').hide();
        });
      </script>
       <?php }else{ ?>
        <script>
        $(document).ready(function() {
            $('.show').hide();
            $('.edit').show();
        });
      </script>
       <?php } ?>
       <script>
       $('#editShopify').click(function(){
          $('.show').hide();
            $('.edit').show();
        });
       </script>