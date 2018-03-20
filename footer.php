    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; The TraveBlog</p>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </footer>

     <script type="text/javascript">
				var pic_number = 1;
				function add_more(){
					try{
						pic_number++;
					
					var create_div = document.createElement('div');
					
					var create_div_id = "apic"+pic_number;
					
					create_div.id = create_div_id;
					
					document.getElementById('apics').appendChild(create_div);
					
					var new_field ='<div class="form-group"><div class="input-group"  style="width:100%"> <div style="float:left"><input type="file" name="apic['+pic_number+']"  class="form-control"  style=" margin-top:5px !important;" class="maininput"/></div><div style="float:left;margin-top: 10px;"><input id="apic_default'+pic_number+'" name="apic_default" value="'+pic_number+'" type="radio" style=" width:15px;" /> <label for="apic_default'+pic_number+'">Default</label></div><div class="inputfild"><input name="remove1" class="btn btn-danger pull-right" type="button" value="Remove" onclick="remove_pic('+"'"+'apic'+pic_number+"'"+')" /></div></div></div>';
					create_div.innerHTML = new_field;
					
					}catch(e){
						alert(e.message);
					}
				}
				
				function remove_pic(id){
					try{
						document.getElementById('apics').removeChild( document.getElementById(id) ); 
					}catch(e){
						alert(e.message);
					}
				}
				
			</script>
