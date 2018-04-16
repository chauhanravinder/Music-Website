<form action="" method="post">

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
						
                                              header("location:search.php?srch=$search");
								}
								
							
							
							?>