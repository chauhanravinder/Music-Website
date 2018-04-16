 <div class="col-md-4 serch-part">
								<div id="sb-search" class="sb-search">
									<form method="post">

										<input class="sb-search-input" placeholder="Search" type="search" name="search" id="search">
										<input class="sb-search-submit" type="submit" value="" name="s1">
										<span class="sb-icon-search"> </span>
									</form>
								</div>
							</div>
                            
                              <?php
							if(isset($_POST["s1"]))
							{
								         $search=$_POST["search"];
						
                                              header("location:search2.php?srch=$search");
								}
								
							
							
							?>
							  <!-- search-scripts -->
									<script src="js/classie.js"></script>
									<script src="js/uisearch.js"></script>
										<script>
											new UISearch( document.getElementById( 'sb-search' ) );
										</script>
									<!-- //search-scripts -->