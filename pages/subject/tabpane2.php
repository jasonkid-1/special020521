<div class="card-body">
                  <div class="tab-content">
                    <div class="tab-pane active" id="BSCS">
                      <div class="table-responsive">
                      <table class="table table-hover" id="example1">
                      <thead class="text-primary">
                        <th>COURSE CODE</th>
                        <th>COURSE DESCRIPTION</th>
                        <th>UNIT(S)</th>
                        <th>PREREQUISITE</th>
                        <th>COURSE</th>
                        <th>YEAR</th>
                        <th>SEM</th>
                        <th>OPTION</th>
                      </thead>
                      <tbody>
                        <?php include '../../includes/db.php';
                                $query = mysqli_query($db, "SELECT *,tbl_year_levels.year_level, tbl_semesters.semester, tbl_courses.course_id FROM tbl_subjects_new LEFT JOIN tbl_courses ON tbl_courses.course_id = tbl_subjects_new.course_id
                                  LEFT JOIN tbl_year_levels ON tbl_year_levels.year_id = tbl_subjects_new.year_id
                                  LEFT JOIN tbl_semesters ON tbl_semesters.sem_id = tbl_subjects_new.sem_id  WHERE tbl_subjects_new.course_id = '1'");
                                while ($row= mysqli_fetch_array ($query)){
                                    $id=$row['subj_id'];
                                    ?><tr>
                                    <td><?php echo $row['subj_code']; ?></td>
                                    <td><?php echo $row['subj_desc']; ?></td>
                                    <td><?php echo $row['unit_total']; ?></td>
                                    <td><?php echo $row['prereq']; ?></td>
                                    <td><?php echo $row['course']; ?></td>
                                    <td><?php echo $row['year_level']; ?></td>
                                    <td><?php echo $row['semester']; ?></td>
                                    <td>
                                      <a class="btn btn-primary" for="ViewAdmin" href="edit_subj.php<?php echo '?subj_id='.$id; ?>">
                                    <i class="fa fa-edit"></i> Update</a>
                                      <a class="btn btn-danger" for="DeleteAdmin" href="#delete<?php echo $id;?>" data-toggle="modal" data-target="#delete<?php echo $id;?>">
                                        <i class="glyphicon glyphicon-trash icon-white"></i> Delete
                                    </a>

                                    

                                    <div class="modal fade" id="delete<?php  echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">DELETE SUBJECT</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                          </div>
                                          <div class="modal-body">
                                            <div class="alert alert-danger">
                                                    Are you sure you want to delete <?php echo $row['subj_code'].' - '.$row['subj_desc'] ?>?
                                                </div>
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                                            <a href="delete_subj.php<?php echo '?subj_id='.$id; ?>" class="btn btn-danger">Yes</a>
                                          </div>
                                        </div>
                                      </div>
                                    </div>

                                   </td>
                                </tr>
                                <?php } ?>
                      </tbody>
                    </table></div>
                    </div>
                    <div class="tab-pane" id="BSHRM">
                      <div class="table-responsive">
                      <table class="table table-hover" id="example2">
                      <thead class="text-primary">
                        <th>COURSE CODE</th>
                        <th>COURSE DESCRIPTION</th>
                        <th>UNIT(S)</th>
                        <th>PREREQUISITE</th>
                        <th>COURSE</th>
                        <th>YEAR</th>
                        <th>SEM</th>
                        <th>OPTION</th>
                      </thead>
                      <tbody>
                        <?php include '../../includes/db.php';
                                $query = mysqli_query($db, "SELECT *,tbl_year_levels.year_level, tbl_semesters.semester, tbl_courses.course_id FROM tbl_subjects_new LEFT JOIN tbl_courses ON tbl_courses.course_id = tbl_subjects_new.course_id
                                  LEFT JOIN tbl_year_levels ON tbl_year_levels.year_id = tbl_subjects_new.year_id
                                  LEFT JOIN tbl_semesters ON tbl_semesters.sem_id = tbl_subjects_new.sem_id  WHERE tbl_subjects_new.course_id = '15' ");
                                while ($row= mysqli_fetch_array ($query)){
                                    $id=$row['subj_id'];
                                    ?><tr>
                                    <td><?php echo $row['subj_code']; ?></td>
                                    <td><?php echo $row['subj_desc']; ?></td>
                                    <td><?php echo $row['unit_total']; ?></td>
                                    <td><?php echo $row['prereq']; ?></td>
                                    <td><?php echo $row['course']; ?></td>
                                    <td><?php echo $row['year_level']; ?></td>
                                    <td><?php echo $row['semester']; ?></td>
                                    <td>
                                      <a class="btn btn-primary" for="ViewAdmin" href="edit_subj.php<?php echo '?subj_id='.$id; ?>">
                                    <i class="fa fa-edit"></i> Update</a>
                                      <a class="btn btn-danger" for="DeleteAdmin" href="#delete<?php echo $id;?>" data-toggle="modal" data-target="#delete<?php echo $id;?>">
                                        <i class="glyphicon glyphicon-trash icon-white"></i> Delete
                                    </a>

                                    

                                    <div class="modal fade" id="delete<?php  echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">DELETE SUBJECT</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                          </div>
                                          <div class="modal-body">
                                            <div class="alert alert-danger">
                                                    Are you sure you want to delete <?php echo $row['subj_code'].' - '.$row['subj_desc'] ?>?
                                                </div>
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                                            <a href="delete_subj.php<?php echo '?subj_id='.$id; ?>" class="btn btn-danger">Yes</a>
                                          </div>
                                        </div>
                                      </div>
                                    </div>

                                   </td>
                                </tr>
                                <?php } ?>
                      </tbody>
                    </table></div>
                    </div>
                    <div class="tab-pane" id="BEED">
                      <div class="table-responsive">
                      <table class="table table-hover" id="example18">
                      <thead class="text-primary">
                        <th>COURSE CODE</th>
                        <th>COURSE DESCRIPTION</th>
                        <th>UNIT(S)</th>
                        <th>PREREQUISITE</th>
                        <th>COURSE</th>
                        <th>YEAR</th>
                        <th>SEM</th>
                        <th>OPTION</th>
                      </thead>
                      <tbody>
                        <?php include '../../includes/db.php';
                                $query = mysqli_query($db, "SELECT *,tbl_year_levels.year_level, tbl_semesters.semester, tbl_courses.course_id FROM tbl_subjects_new LEFT JOIN tbl_courses ON tbl_courses.course_id = tbl_subjects_new.course_id
                                  LEFT JOIN tbl_year_levels ON tbl_year_levels.year_id = tbl_subjects_new.year_id
                                  LEFT JOIN tbl_semesters ON tbl_semesters.sem_id = tbl_subjects_new.sem_id  WHERE tbl_subjects_new.course_id = '19' ");
                                while ($row= mysqli_fetch_array ($query)){
                                    $id=$row['subj_id'];
                                    ?><tr>
                                    <td><?php echo $row['subj_code']; ?></td>
                                    <td><?php echo $row['subj_desc']; ?></td>
                                    <td><?php echo $row['unit_total']; ?></td>
                                    <td><?php echo $row['prereq']; ?></td>
                                    <td><?php echo $row['course']; ?></td>
                                    <td><?php echo $row['year_level']; ?></td>
                                    <td><?php echo $row['semester']; ?></td>
                                    <td>
                                      <a class="btn btn-primary" for="ViewAdmin" href="edit_subj.php<?php echo '?subj_id='.$id; ?>">
                                    <i class="fa fa-edit"></i> Update</a>
                                      <a class="btn btn-danger" for="DeleteAdmin" href="#delete<?php echo $id;?>" data-toggle="modal" data-target="#delete<?php echo $id;?>">
                                        <i class="glyphicon glyphicon-trash icon-white"></i> Delete
                                    </a>

                                    

                                    <div class="modal fade" id="delete<?php  echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">DELETE SUBJECT</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                          </div>
                                          <div class="modal-body">
                                            <div class="alert alert-danger">
                                                    Are you sure you want to delete <?php echo $row['subj_code'].' - '.$row['subj_desc'] ?>?
                                                </div>
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                                            <a href="delete_subj.php<?php echo '?subj_id='.$id; ?>" class="btn btn-danger">Yes</a>
                                          </div>
                                        </div>
                                      </div>
                                    </div>

                                   </td>
                                </tr>
                                <?php } ?>
                      </tbody>
                    </table></div>
                    </div>
                    <div class="tab-pane" id="TCP">
                      <div class="table-responsive">
                      <table class="table table-hover" id="example19">
                      <thead class="text-primary">
                        <th>COURSE CODE</th>
                        <th>COURSE DESCRIPTION</th>
                        <th>UNIT(S)</th>
                        <th>PREREQUISITE</th>
                        <th>COURSE</th>
                        <th>YEAR</th>
                        <th>SEM</th>
                        <th>OPTION</th>
                      </thead>
                      <tbody>
                        <?php include '../../includes/db.php';
                                $query = mysqli_query($db, "SELECT *,tbl_year_levels.year_level, tbl_semesters.semester, tbl_courses.course_id FROM tbl_subjects_new LEFT JOIN tbl_courses ON tbl_courses.course_id = tbl_subjects_new.course_id
                                  LEFT JOIN tbl_year_levels ON tbl_year_levels.year_id = tbl_subjects_new.year_id
                                  LEFT JOIN tbl_semesters ON tbl_semesters.sem_id = tbl_subjects_new.sem_id  WHERE tbl_subjects_new.course_id = '24' ");
                                while ($row= mysqli_fetch_array ($query)){
                                    $id=$row['subj_id'];
                                    ?><tr>
                                    <td><?php echo $row['subj_code']; ?></td>
                                    <td><?php echo $row['subj_desc']; ?></td>
                                    <td><?php echo $row['unit_total']; ?></td>
                                    <td><?php echo $row['prereq']; ?></td>
                                    <td><?php echo $row['course']; ?></td>
                                    <td><?php echo $row['year_level']; ?></td>
                                    <td><?php echo $row['semester']; ?></td>
                                    <td>
                                      <a class="btn btn-primary" for="ViewAdmin" href="edit_subj.php<?php echo '?subj_id='.$id; ?>">
                                    <i class="fa fa-edit"></i> Update</a>
                                      <a class="btn btn-danger" for="DeleteAdmin" href="#delete<?php echo $id;?>" data-toggle="modal" data-target="#delete<?php echo $id;?>">
                                        <i class="glyphicon glyphicon-trash icon-white"></i> Delete
                                    </a>

                                    

                                    <div class="modal fade" id="delete<?php  echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">DELETE SUBJECT</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                          </div>
                                          <div class="modal-body">
                                            <div class="alert alert-danger">
                                                    Are you sure you want to delete <?php echo $row['subj_code'].' - '.$row['subj_desc'] ?>?
                                                </div>
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                                            <a href="delete_subj.php<?php echo '?subj_id='.$id; ?>" class="btn btn-danger">Yes</a>
                                          </div>
                                        </div>
                                      </div>
                                    </div>

                                   </td>
                                </tr>
                                <?php } ?>
                      </tbody>
                    </table></div>
                    </div>
                    <div class="tab-pane" id="BSBAManagement">
                      <div class="table-responsive">
                      <table class="table table-hover" id="example3">
                      <thead class="text-primary">
                        <th>COURSE CODE</th>
                        <th>COURSE DESCRIPTION</th>
                        <th>UNIT(S)</th>
                        <th>PREREQUISITE</th>
                        <th>COURSE</th>
                        <th>YEAR</th>
                        <th>SEM</th>
                        <th>OPTION</th>
                      </thead>
                      <tbody>
                        <?php include '../../includes/db.php';
                                $query = mysqli_query($db, "SELECT *, tbl_year_levels.year_level, tbl_semesters.semester, tbl_courses.course_id FROM tbl_subjects_new LEFT JOIN tbl_courses ON tbl_courses.course_id = tbl_subjects_new.course_id
                                  LEFT JOIN tbl_year_levels ON tbl_year_levels.year_id = tbl_subjects_new.year_id
                                  LEFT JOIN tbl_semesters ON tbl_semesters.sem_id = tbl_subjects_new.sem_id WHERE tbl_subjects_new.course_id = '25' ");
                                while ($row= mysqli_fetch_array ($query)){
                                    $id=$row['subj_id'];
                                    ?><tr>
                                    <td><?php echo $row['subj_code']; ?></td>
                                    <td><?php echo $row['subj_desc']; ?></td>
                                    <td><?php echo $row['unit_total']; ?></td>
                                    <td><?php echo $row['prereq']; ?></td>
                                    <td><?php echo $row['course']; ?></td>
                                    <td><?php echo $row['year_level']; ?></td>
                                    <td><?php echo $row['semester']; ?></td>
                                    <td>
                                      <a class="btn btn-primary" for="ViewAdmin" href="edit_subj.php<?php echo '?subj_id='.$id; ?>">
                                    <i class="fa fa-edit"></i> Update</a>
                                      <a class="btn btn-danger" for="DeleteAdmin" href="#delete<?php echo $id;?>" data-toggle="modal" data-target="#delete<?php echo $id;?>">
                                        <i class="glyphicon glyphicon-trash icon-white"></i> Delete
                                    </a>

                                    

                                    <div class="modal fade" id="delete<?php  echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">DELETE SUBJECT</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                          </div>
                                          <div class="modal-body">
                                            <div class="alert alert-danger">
                                                    Are you sure you want to delete <?php echo $row['subj_code'].' - '.$row['subj_desc'] ?>?
                                                </div>
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                                            <a href="delete_subj.php<?php echo '?subj_id='.$id; ?>" class="btn btn-danger">Yes</a>
                                          </div>
                                        </div>
                                      </div>
                                    </div>

                                   </td>
                                </tr>
                                <?php } ?>
                      </tbody>
                    </table></div>
                    </div>
                    <div class="tab-pane" id="BSBAMarketing">
                      <div class="table-responsive">
                      <table class="table table-hover" id="example4">
                      <thead class="text-primary">
                        <th>COURSE CODE</th>
                        <th>COURSE DESCRIPTION</th>
                        <th>UNIT(S)</th>
                        <th>PREREQUISITE</th>
                        <th>COURSE</th>
                        <th>YEAR</th>
                        <th>SEM</th>
                        <th>OPTION</th>
                      </thead>
                      <tbody>
                        <?php include '../../includes/db.php';
                                $query = mysqli_query($db, "SELECT *, tbl_year_levels.year_level, tbl_semesters.semester, tbl_courses.course_id FROM tbl_subjects_new LEFT JOIN tbl_courses ON tbl_courses.course_id = tbl_subjects_new.course_id
                                  LEFT JOIN tbl_year_levels ON tbl_year_levels.year_id = tbl_subjects_new.year_id
                                  LEFT JOIN tbl_semesters ON tbl_semesters.sem_id = tbl_subjects_new.sem_id WHERE tbl_subjects_new.course_id = '3' ");
                                while ($row= mysqli_fetch_array ($query)){
                                    $id=$row['subj_id'];
                                    ?><tr>
                                    <td><?php echo $row['subj_code']; ?></td>
                                    <td><?php echo $row['subj_desc']; ?></td>
                                    <td><?php echo $row['unit_total']; ?></td>
                                    <td><?php echo $row['prereq']; ?></td>
                                    <td><?php echo $row['course']; ?></td>
                                    <td><?php echo $row['year_level']; ?></td>
                                    <td><?php echo $row['semester']; ?></td>
                                    <td>
                                      <a class="btn btn-primary" for="ViewAdmin" href="edit_subj.php<?php echo '?subj_id='.$id; ?>">
                                    <i class="fa fa-edit"></i> Update</a>
                                      <a class="btn btn-danger" for="DeleteAdmin" href="#delete<?php echo $id;?>" data-toggle="modal" data-target="#delete<?php echo $id;?>">
                                        <i class="glyphicon glyphicon-trash icon-white"></i> Delete
                                    </a>

                                    

                                    <div class="modal fade" id="delete<?php  echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">DELETE SUBJECT</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                          </div>
                                          <div class="modal-body">
                                            <div class="alert alert-danger">
                                                    Are you sure you want to delete <?php echo $row['subj_code'].' - '.$row['subj_desc'] ?>?
                                                </div>
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                                            <a href="delete_subj.php<?php echo '?subj_id='.$id; ?>" class="btn btn-danger">Yes</a>
                                          </div>
                                        </div>
                                      </div>
                                    </div>

                                   </td>
                                </tr>
                                <?php } ?>
                      </tbody>
                    </table></div>
                    </div>
                    <div class="tab-pane" id="BEEDEc">
                      <div class="table-responsive">
                      <table class="table table-hover" id="example10">
                      <thead class="text-primary">
                        <th>COURSE CODE</th>
                        <th>COURSE DESCRIPTION</th>
                        <th>UNIT(S)</th>
                        <th>PREREQUISITE</th>
                        <th>COURSE</th>
                        <th>YEAR</th>
                        <th>SEM</th>
                        <th>OPTION</th>
                      </thead>
                      <tbody>
                        <?php include '../../includes/db.php';
                                $query = mysqli_query($db, "SELECT *,tbl_year_levels.year_level, tbl_semesters.semester, tbl_courses.course_id FROM tbl_subjects_new LEFT JOIN tbl_courses ON tbl_courses.course_id = tbl_subjects_new.course_id
                                  LEFT JOIN tbl_year_levels ON tbl_year_levels.year_id = tbl_subjects_new.year_id
                                  LEFT JOIN tbl_semesters ON tbl_semesters.sem_id = tbl_subjects_new.sem_id  WHERE tbl_subjects_new.course_id = '17' ");
                                while ($row= mysqli_fetch_array ($query)){
                                    $id=$row['subj_id'];
                                    ?><tr>
                                    <td><?php echo $row['subj_code']; ?></td>
                                    <td><?php echo $row['subj_desc']; ?></td>
                                    <td><?php echo $row['unit_total']; ?></td>
                                    <td><?php echo $row['prereq']; ?></td>
                                    <td><?php echo $row['course']; ?></td>
                                    <td><?php echo $row['year_level']; ?></td>
                                    <td><?php echo $row['semester']; ?></td>
                                    <td>
                                      <a class="btn btn-primary" for="ViewAdmin" href="edit_subj.php<?php echo '?subj_id='.$id; ?>">
                                    <i class="fa fa-edit"></i> Update</a>
                                      <a class="btn btn-danger" for="DeleteAdmin" href="#delete<?php echo $id;?>" data-toggle="modal" data-target="#delete<?php echo $id;?>">
                                        <i class="glyphicon glyphicon-trash icon-white"></i> Delete
                                    </a>

                                    

                                    <div class="modal fade" id="delete<?php  echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">DELETE SUBJECT</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                          </div>
                                          <div class="modal-body">
                                            <div class="alert alert-danger">
                                                    Are you sure you want to delete <?php echo $row['subj_code'].' - '.$row['subj_desc'] ?>?
                                                </div>
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                                            <a href="delete_subj.php<?php echo '?subj_id='.$id; ?>" class="btn btn-danger">Yes</a>
                                          </div>
                                        </div>
                                      </div>
                                    </div>

                                   </td>
                                </tr>
                                <?php } ?>
                      </tbody>
                    </table></div>
                    </div>
                    <div class="tab-pane" id="BEEDSped">
                      <div class="table-responsive">
                      <table class="table table-hover" id="example11">
                      <thead class="text-primary">
                        <th>COURSE CODE</th>
                        <th>COURSE DESCRIPTION</th>
                        <th>UNIT(S)</th>
                        <th>PREREQUISITE</th>
                        <th>COURSE</th>
                        <th>YEAR</th>
                        <th>SEM</th>
                        <th>OPTION</th>
                      </thead>
                      <tbody>
                        <?php include '../../includes/db.php';
                                $query = mysqli_query($db, "SELECT *,tbl_year_levels.year_level, tbl_semesters.semester, tbl_courses.course_id FROM tbl_subjects_new LEFT JOIN tbl_courses ON tbl_courses.course_id = tbl_subjects_new.course_id
                                  LEFT JOIN tbl_year_levels ON tbl_year_levels.year_id = tbl_subjects_new.year_id
                                  LEFT JOIN tbl_semesters ON tbl_semesters.sem_id = tbl_subjects_new.sem_id  WHERE tbl_subjects_new.course_id = '16' ");
                                while ($row= mysqli_fetch_array ($query)){
                                    $id=$row['subj_id'];
                                    ?><tr>
                                    <td><?php echo $row['subj_code']; ?></td>
                                    <td><?php echo $row['subj_desc']; ?></td>
                                    <td><?php echo $row['unit_total']; ?></td>
                                    <td><?php echo $row['prereq']; ?></td>
                                    <td><?php echo $row['course']; ?></td>
                                    <td><?php echo $row['year_level']; ?></td>
                                    <td><?php echo $row['semester']; ?></td>
                                    <td>
                                      <a class="btn btn-primary" for="ViewAdmin" href="edit_subj.php<?php echo '?subj_id='.$id; ?>">
                                    <i class="fa fa-edit"></i> Update</a>
                                      <a class="btn btn-danger" for="DeleteAdmin" href="#delete<?php echo $id;?>" data-toggle="modal" data-target="#delete<?php echo $id;?>">
                                        <i class="glyphicon glyphicon-trash icon-white"></i> Delete
                                    </a>

                                    

                                    <div class="modal fade" id="delete<?php  echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">DELETE SUBJECT</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                          </div>
                                          <div class="modal-body">
                                            <div class="alert alert-danger">
                                                    Are you sure you want to delete <?php echo $row['subj_code'].' - '.$row['subj_desc'] ?>?
                                                </div>
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                                            <a href="delete_subj.php<?php echo '?subj_id='.$id; ?>" class="btn btn-danger">Yes</a>
                                          </div>
                                        </div>
                                      </div>
                                    </div>

                                   </td>
                                </tr>
                                <?php } ?>
                      </tbody>
                    </table></div>
                    </div>
                    <div class="tab-pane" id="PE">
                      <div class="table-responsive">
                      <table class="table table-hover" id="example12">
                      <thead class="text-primary">
                        <th>COURSE CODE</th>
                        <th>COURSE DESCRIPTION</th>
                        <th>UNIT(S)</th>
                        <th>PREREQUISITE</th>
                        <th>COURSE</th>
                        <th>YEAR</th>
                        <th>SEM</th>
                        <th>OPTION</th>
                      </thead>
                      <tbody>
                        <?php include '../../includes/db.php';
                                $query = mysqli_query($db, "SELECT *,tbl_year_levels.year_level, tbl_semesters.semester, tbl_courses.course_id FROM tbl_subjects_new LEFT JOIN tbl_courses ON tbl_courses.course_id = tbl_subjects_new.course_id
                                  LEFT JOIN tbl_year_levels ON tbl_year_levels.year_id = tbl_subjects_new.year_id
                                  LEFT JOIN tbl_semesters ON tbl_semesters.sem_id = tbl_subjects_new.sem_id  WHERE tbl_subjects_new.course_id = '18' ");
                                while ($row= mysqli_fetch_array ($query)){
                                    $id=$row['subj_id'];
                                    ?><tr>
                                    <td><?php echo $row['subj_code']; ?></td>
                                    <td><?php echo $row['subj_desc']; ?></td>
                                    <td><?php echo $row['unit_total']; ?></td>
                                    <td><?php echo $row['prereq']; ?></td>
                                    <td><?php echo $row['course']; ?></td>
                                    <td><?php echo $row['year_level']; ?></td>
                                    <td><?php echo $row['semester']; ?></td>
                                    <td>
                                      <a class="btn btn-primary" for="ViewAdmin" href="edit_subj.php<?php echo '?subj_id='.$id; ?>">
                                    <i class="fa fa-edit"></i> Update</a>
                                      <a class="btn btn-danger" for="DeleteAdmin" href="#delete<?php echo $id;?>" data-toggle="modal" data-target="#delete<?php echo $id;?>">
                                        <i class="glyphicon glyphicon-trash icon-white"></i> Delete
                                    </a>

                                    

                                    <div class="modal fade" id="delete<?php  echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">DELETE SUBJECT</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                          </div>
                                          <div class="modal-body">
                                            <div class="alert alert-danger">
                                                    Are you sure you want to delete <?php echo $row['subj_code'].' - '.$row['subj_desc'] ?>?
                                                </div>
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                                            <a href="delete_subj.php<?php echo '?subj_id='.$id; ?>" class="btn btn-danger">Yes</a>
                                          </div>
                                        </div>
                                      </div>
                                    </div>

                                   </td>
                                </tr>
                                <?php } ?>
                      </tbody>
                    </table></div>
                    </div>
                    <div class="tab-pane" id="HRMnonABM">
                      <div class="table-responsive">
                      <table class="table table-hover" id="example13">
                      <thead class="text-primary">
                        <th>COURSE CODE</th>
                        <th>COURSE DESCRIPTION</th>
                        <th>UNIT(S)</th>
                        <th>PREREQUISITE</th>
                        <th>COURSE</th>
                        <th>YEAR</th>
                        <th>SEM</th>
                        <th>OPTION</th>
                      </thead>
                      <tbody>
                        <?php include '../../includes/db.php';
                                $query = mysqli_query($db, "SELECT *,tbl_year_levels.year_level, tbl_semesters.semester, tbl_courses.course_id FROM tbl_subjects_new LEFT JOIN tbl_courses ON tbl_courses.course_id = tbl_subjects_new.course_id
                                  LEFT JOIN tbl_year_levels ON tbl_year_levels.year_id = tbl_subjects_new.year_id
                                  LEFT JOIN tbl_semesters ON tbl_semesters.sem_id = tbl_subjects_new.sem_id  WHERE tbl_subjects_new.course_id = '15' ");
                                while ($row= mysqli_fetch_array ($query)){
                                    $id=$row['subj_id'];
                                    ?><tr>
                                    <td><?php echo $row['subj_code']; ?></td>
                                    <td><?php echo $row['subj_desc']; ?></td>
                                    <td><?php echo $row['unit_total']; ?></td>
                                    <td><?php echo $row['prereq']; ?></td>
                                    <td><?php echo $row['course']; ?></td>
                                    <td><?php echo $row['year_level']; ?></td>
                                    <td><?php echo $row['semester']; ?></td>
                                    <td>
                                      <a class="btn btn-primary" for="ViewAdmin" href="edit_subj.php<?php echo '?subj_id='.$id; ?>">
                                    <i class="fa fa-edit"></i> Update</a>
                                      <a class="btn btn-danger" for="DeleteAdmin" href="#delete<?php echo $id;?>" data-toggle="modal" data-target="#delete<?php echo $id;?>">
                                        <i class="glyphicon glyphicon-trash icon-white"></i> Delete
                                    </a>

                                    <div class="modal fade" id="delete<?php  echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">DELETE SUBJECT</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                          </div>
                                          <div class="modal-body">
                                            <div class="alert alert-danger">
                                                    Are you sure you want to delete <?php echo $row['subj_code'].' - '.$row['subj_desc'] ?>?
                                                </div>
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                                            <a href="delete_subj.php<?php echo '?subj_id='.$id; ?>" class="btn btn-danger">Yes</a>
                                          </div>
                                        </div>
                                      </div>
                                    </div>

                                   </td>
                                </tr>
                                <?php } ?>
                      </tbody>
                    </table></div>
                    </div>
                    <div class="tab-pane" id="BRIDGING">
                      <div class="table-responsive">
                      <table class="table table-hover" id="example14">
                      <thead class="text-primary">
                        <th>COURSE CODE</th>
                        <th>COURSE DESCRIPTION</th>
                        <th>UNIT(S)</th>
                        <th>PREREQUISITE</th>
                        <th>COURSE</th>
                        <th>YEAR</th>
                        <th>SEM</th>
                        <th>OPTION</th>
                      </thead>
                      <tbody>
                        <?php include '../../includes/db.php';
                                $query = mysqli_query($db, "SELECT *,tbl_year_levels.year_level, tbl_semesters.semester, tbl_courses.course_id FROM tbl_subjects_new LEFT JOIN tbl_courses ON tbl_courses.course_id = tbl_subjects_new.course_id
                                  LEFT JOIN tbl_year_levels ON tbl_year_levels.year_id = tbl_subjects_new.year_id
                                  LEFT JOIN tbl_semesters ON tbl_semesters.sem_id = tbl_subjects_new.sem_id  WHERE tbl_subjects_new.course_id = '8' ");
                                while ($row= mysqli_fetch_array ($query)){
                                    $id=$row['subj_id'];
                                    ?><tr>
                                    <td><?php echo $row['subj_code']; ?></td>
                                    <td><?php echo $row['subj_desc']; ?></td>
                                    <td><?php echo $row['unit_total']; ?></td>
                                    <td><?php echo $row['prereq']; ?></td>
                                    <td><?php echo $row['course']; ?></td>
                                    <td><?php echo $row['year_level']; ?></td>
                                    <td><?php echo $row['semester']; ?></td>
                                    <td>
                                      <a class="btn btn-primary" for="ViewAdmin" href="edit_subj.php<?php echo '?subj_id='.$id; ?>">
                                    <i class="fa fa-edit"></i> Update</a>
                                      <a class="btn btn-danger" for="DeleteAdmin" href="#delete<?php echo $id;?>" data-toggle="modal" data-target="#delete<?php echo $id;?>">
                                        <i class="glyphicon glyphicon-trash icon-white"></i> Delete
                                    </a>

                                    

                                    <div class="modal fade" id="delete<?php  echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">DELETE SUBJECT</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                          </div>
                                          <div class="modal-body">
                                            <div class="alert alert-danger">
                                                    Are you sure you want to delete <?php echo $row['subj_code'].' - '.$row['subj_desc'] ?>?
                                                </div>
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                                            <a href="delete_subj.php<?php echo '?subj_id='.$id; ?>" class="btn btn-danger">Yes</a>
                                          </div>
                                        </div>
                                      </div>
                                    </div>

                                   </td>
                                </tr>
                                <?php } ?>
                      </tbody>
                    </table></div>
                    </div>
                    <div class="tab-pane" id="FILI">
                      <div class="table-responsive">
                      <table class="table table-hover" id="example15">
                      <thead class="text-primary">
                        <th>COURSE CODE</th>
                        <th>COURSE DESCRIPTION</th>
                        <th>UNIT(S)</th>
                        <th>PREREQUISITE</th>
                        <th>COURSE</th>
                        <th>YEAR</th>
                        <th>SEM</th>
                        <th>OPTION</th>
                      </thead>
                      <tbody>
                        <?php include '../../includes/db.php';
                                $query = mysqli_query($db, "SELECT *,tbl_year_levels.year_level, tbl_semesters.semester, tbl_courses.course_id FROM tbl_subjects_new LEFT JOIN tbl_courses ON tbl_courses.course_id = tbl_subjects_new.course_id
                                  LEFT JOIN tbl_year_levels ON tbl_year_levels.year_id = tbl_subjects_new.year_id
                                  LEFT JOIN tbl_semesters ON tbl_semesters.sem_id = tbl_subjects_new.sem_id  WHERE tbl_subjects_new.course_id = '11' ");
                                while ($row= mysqli_fetch_array ($query)){
                                    $id=$row['subj_id'];
                                    ?><tr>
                                    <td><?php echo $row['subj_code']; ?></td>
                                    <td><?php echo $row['subj_desc']; ?></td>
                                    <td><?php echo $row['unit_total']; ?></td>
                                    <td><?php echo $row['prereq']; ?></td>
                                    <td><?php echo $row['course']; ?></td>
                                    <td><?php echo $row['year_level']; ?></td>
                                    <td><?php echo $row['semester']; ?></td>
                                    <td>
                                      <a class="btn btn-primary" for="ViewAdmin" href="edit_subj.php<?php echo '?subj_id='.$id; ?>">
                                    <i class="fa fa-edit"></i> Update</a>
                                      <a class="btn btn-danger" for="DeleteAdmin" href="#delete<?php echo $id;?>" data-toggle="modal" data-target="#delete<?php echo $id;?>">
                                        <i class="glyphicon glyphicon-trash icon-white"></i> Delete
                                    </a>

                                    

                                    <div class="modal fade" id="delete<?php  echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">DELETE SUBJECT</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                          </div>
                                          <div class="modal-body">
                                            <div class="alert alert-danger">
                                                    Are you sure you want to delete <?php echo $row['subj_code'].' - '.$row['subj_desc'] ?>?
                                                </div>
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                                            <a href="delete_subj.php<?php echo '?subj_id='.$id; ?>" class="btn btn-danger">Yes</a>
                                          </div>
                                        </div>
                                      </div>
                                    </div>

                                   </td>
                                </tr>
                                <?php } ?>
                      </tbody>
                    </table></div>
                    </div>
                    <div class="tab-pane" id="ENGLISH">
                      <div class="table-responsive">
                      <table class="table table-hover" id="example16">
                      <thead class="text-primary">
                        <th>COURSE CODE</th>
                        <th>COURSE DESCRIPTION</th>
                        <th>UNIT(S)</th>
                        <th>PREREQUISITE</th>
                        <th>COURSE</th>
                        <th>YEAR</th>
                        <th>SEM</th>
                        <th>OPTION</th>
                      </thead>
                      <tbody>
                        <?php include '../../includes/db.php';
                                $query = mysqli_query($db, "SELECT *,tbl_year_levels.year_level, tbl_semesters.semester, tbl_courses.course_id FROM tbl_subjects_new LEFT JOIN tbl_courses ON tbl_courses.course_id = tbl_subjects_new.course_id
                                  LEFT JOIN tbl_year_levels ON tbl_year_levels.year_id = tbl_subjects_new.year_id
                                  LEFT JOIN tbl_semesters ON tbl_semesters.sem_id = tbl_subjects_new.sem_id  WHERE tbl_subjects_new.course_id = '10' ");
                                while ($row= mysqli_fetch_array ($query)){
                                    $id=$row['subj_id'];
                                    ?><tr>
                                    <td><?php echo $row['subj_code']; ?></td>
                                    <td><?php echo $row['subj_desc']; ?></td>
                                    <td><?php echo $row['unit_total']; ?></td>
                                    <td><?php echo $row['prereq']; ?></td>
                                    <td><?php echo $row['course']; ?></td>
                                    <td><?php echo $row['year_level']; ?></td>
                                    <td><?php echo $row['semester']; ?></td>
                                    <td>
                                      <a class="btn btn-primary" for="ViewAdmin" href="edit_subj.php<?php echo '?subj_id='.$id; ?>">
                                    <i class="fa fa-edit"></i> Update</a>
                                      <a class="btn btn-danger" for="DeleteAdmin" href="#delete<?php echo $id;?>" data-toggle="modal" data-target="#delete<?php echo $id;?>">
                                        <i class="glyphicon glyphicon-trash icon-white"></i> Delete
                                    </a>

                                    

                                    <div class="modal fade" id="delete<?php  echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">DELETE SUBJECT</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                          </div>
                                          <div class="modal-body">
                                            <div class="alert alert-danger">
                                                    Are you sure you want to delete <?php echo $row['subj_code'].' - '.$row['subj_desc'] ?>?
                                                </div>
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                                            <a href="delete_subj.php<?php echo '?subj_id='.$id; ?>" class="btn btn-danger">Yes</a>
                                          </div>
                                        </div>
                                      </div>
                                    </div>

                                   </td>
                                </tr>
                                <?php } ?>
                      </tbody>
                    </table></div>
                    </div>
                    <div class="tab-pane" id="MATH">
                      <div class="table-responsive">
                      <table class="table table-hover" id="example17">
                      <thead class="text-primary">
                        <th>COURSE CODE</th>
                        <th>COURSE DESCRIPTION</th>
                        <th>UNIT(S)</th>
                        <th>PREREQUISITE</th>
                        <th>COURSE</th>
                        <th>YEAR</th>
                        <th>SEM</th>
                        <th>OPTION</th>
                      </thead>
                      <tbody>
                        <?php include '../../includes/db.php';
                                $query = mysqli_query($db, "SELECT *,tbl_year_levels.year_level, tbl_semesters.semester, tbl_courses.course_id FROM tbl_subjects_new LEFT JOIN tbl_courses ON tbl_courses.course_id = tbl_subjects_new.course_id
                                  LEFT JOIN tbl_year_levels ON tbl_year_levels.year_id = tbl_subjects_new.year_id
                                  LEFT JOIN tbl_semesters ON tbl_semesters.sem_id = tbl_subjects_new.sem_id  WHERE tbl_subjects_new.course_id = '12' ");
                                while ($row= mysqli_fetch_array ($query)){
                                    $id=$row['subj_id'];
                                    ?><tr>
                                    <td><?php echo $row['subj_code']; ?></td>
                                    <td><?php echo $row['subj_desc']; ?></td>
                                    <td><?php echo $row['unit_total']; ?></td>
                                    <td><?php echo $row['prereq']; ?></td>
                                    <td><?php echo $row['course']; ?></td>
                                    <td><?php echo $row['year_level']; ?></td>
                                    <td><?php echo $row['semester']; ?></td>
                                    <td>
                                      <a class="btn btn-primary" for="ViewAdmin" href="edit_subj.php<?php echo '?subj_id='.$id; ?>">
                                    <i class="fa fa-edit"></i> Update</a>
                                      <a class="btn btn-danger" for="DeleteAdmin" href="#delete<?php echo $id;?>" data-toggle="modal" data-target="#delete<?php echo $id;?>">
                                        <i class="glyphicon glyphicon-trash icon-white"></i> Delete
                                    </a>

                                    

                                    <div class="modal fade" id="delete<?php  echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">DELETE SUBJECT</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                          </div>
                                          <div class="modal-body">
                                            <div class="alert alert-danger">
                                                    Are you sure you want to delete <?php echo $row['subj_code'].' - '.$row['subj_desc'] ?>?
                                                </div>
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                                            <a href="delete_subj.php<?php echo '?subj_id='.$id; ?>" class="btn btn-danger">Yes</a>
                                          </div>
                                        </div>
                                      </div>
                                    </div>

                                   </td>
                                </tr>
                                <?php } ?>
                      </tbody>
                    </table></div>
                    </div>
                  </div>
                </div>