<?php 
include('dbcon.php');




?>
          <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="jumbotron">
                    <div class="row">
                        <form action='search.php' method="post">
                            <div class="col-lg-10 col-md-10 col-sm-10">
                                    <input type="text" name="search_box" placeholder="search">
                            </div>

                            <div class="col-lg-2 col-md-2 col-sm-2">
                                    <input type="submit" value="search "name="search">
                            </div>
                        </form>
                        

                    
                    </div>
                </div>

                <div class="jumbotron">
                    <h5>Trending blogs</h5>
                <?php
                    $qry="select  *from posts order by vies desc limit 5";
                    $result=$conn->query($qry);
                    if($result->rowCount()>0)
                    {
                      while($data=$result->FETCH(PDO::FETCH_ASSOC))
                        {
                        ?>
                                <a href="post.php ? post_id=<?php echo $data['id'];?>"><?php echo $data['title'] ?></a></br>
                                
                           
                <?php
                        }
                    }
                ?>
                   
                   

                </div>
               
          </div>

         