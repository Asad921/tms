
      {{-- <div class="container">        
        
        <div class="row">
          
          @foreach ($tasks->sortByDesc('priority') as $task )
        
          <div class="col-md-12">
            <div class="livewire-card card card-light shadow mb-5 rounded user-card-view hover-card">
              <div class="card-header d-flex align-items-center user-card-index d-sm-flex-wrap-0">
                  <div class="author-box-left pl-0 mb-auto">
                          <img alt="image" width="50" src="https://ui-avatars.com/api/?name={{ $task->users->name }}&amp;size=64&amp;rounded=true&amp;color=fff&amp;background=fc6369"
                               class="rounded-circle user-avatar-image uAvatar">
                      <div class="mt-2 ml-2 userActiveDeActiveChk">
                                                  </div>
                  </div>
                  <div class="ml-2 w-100 mb-auto">
                      <div class="justify-content-between d-flex">
                          <div class="user-card-title pb-1">
                              <a href="{{ route('admin.task_details',$task->id) }}"><h4>{{ $task->title }}</h4></a>
                          </div>
                          
                        <div class="user-card-check ml-auto mr-3">
                            Status:
                            <?php
                      if ($task->status == '0') { ?>
                        
                        <p  class="badge badge-danger text-uppercase mr-3">Incomplete</p> 
                        
                      <?php }else { ?>
                        <p class="badge badge-success text-uppercase mr-3">Completed</p> 
                        
                     <?php } ?>
                            
                            </label>
                        </div>
                         
                          <a class="dropdown dropdown-list-toggle">
                              <a href="#" data-toggle="dropdown"
                                 class="notification-toggle action-dropdown  position-xs-bottom">
                                  <i class="fas fa-ellipsis-v action-toggle-mr"></i>
                              </a>
                              <div class="dropdown-menu dropdown-menu-right">
                                  <div class="dropdown-list-content dropdown-list-icons">
                                      <p  class="dropdown-item dropdown-item-desc edit-btn"
                                         data-id="1"><i
                                                  class="fas fa-edit mr-2 card-edit-icon"></i> Task Status
                                      </p>
                                      <div class="empty"></div>
                                      <p href="#" class="dropdown-item dropdown-item-desc delete-btn ml-4" >
                                                  <?php
                                                  if ($task->status == '0') { ?>
                                                    
                                                    <a href="{{ route('admin.tc_status_update',$task->id) }}" class="badge badge-danger text-uppercase mr-3">InCcomplete</a> 
                                                    
                                                  <?php }else { ?>
                                                    <a href="{{route('admin.tc_status_update',$task->id)  }}" class="badge badge-success text-uppercase mr-3">Completed</a> 
                                                    
                                                 <?php } ?>
                                                        
                                                  </p>
                                  </div>
                              </div>
                          </a>
                      </div>
                      <div class="card-assignee-name pt-1 mb-3">
                        {{ $task->users->name }}
                   <span data-toggle="tooltip" title="Email is verified"><i
                      class="fas fa-check-circle email-verified"></i>|| {{ $task->tags }}</span>
                             </div>     
                  </div>
                  
              </div>
              
              
              
              <div class="card-body d-flex align-items-center justify-content-end pt-0 pr-3">
                
                
                <div class="mr-5">
                  Priority
                    <span class="badge badge-secondary text-uppercase">
                      @if ($task->priority == 4)
                      {{ 'Highest' }}
                    @elseif ($task->priority == 3)
                      {{ 'High' }}
                    @elseif ($task->priority == 2)
                      {{ 'Meduim' }}
                    @elseif ($task->priority == 1)
                      {{ 'Low' }}
                    @endif  
                    </span> 
                </div>

                

                  <div class="mr-5">
                    Project Name
                      <span class="badge badge-success text-uppercase">{{ $task->project->name }}</span>  --}}
                  </div>
                  <div>
                    Due Date
                      <span class="badge badge-warning text-uppercase">{{ $task->due_date }}</span> 
                  </div>
                                  </div>
          </div>
            
          </div>
          @endforeach

        </div>
          
      </div>



      @foreach(Auth::user()->task->sortByDesc('priority') as $task)






     

      <td class="align-middle" style="width: 25%">
                      <div class="options d-flex justify-content-around align-items-center">
                        <div class="custom-control custom-checkbox">
                          <script>
                            $(':input').on('change keyup input', function() {
                                   console.log('changed'  + element.checked + );
                                      });
    
                            function onInput(element) {
                              console.log('Agreement changed to ' + element.checked + ' by oninput event.');
                                          }
    
                          </script>
                          <label class="check">
                            <input type="checkbox" name="taskStatus" value="{{ $task->id }}" onclick="taskStatus(this.value)" class="complete-task-checkbox" name="no">
                          </label>
                        </div>
                      </div>
    
                    </td>
                    <td class="align-middle" style="width: 25%">
                      <div class="btn-group" style="width: 15%">
                        <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        
                      </button>
                        <div class="dropdown-menu">
                            <p class="dropdown-item">
                              Status:
                                  <?php
                                    if ($task->status == '0') { ?>
                                    
                                    <span  class="badge badge-danger text-uppercase mr-3">InComplete</span> 
                                    
                                  <?php }else { ?>
                                    <span  class="badge badge-success text-uppercase mr-3">COMleted</span> 
                                    
                                  <?php } ?>
                                  </p>
                            <p class="dropdown-item" >
                              Priority:
                              <span class="badge badge-secondary text-uppercase">
                                @if ($task->priority == 4)
                                            {{ 'Highest' }}
                                          @elseif ($task->priority == 3)
                                            {{ 'High' }}
                                          @elseif ($task->priority == 2)
                                            {{ 'Meduim' }}
                                          @elseif ($task->priority == 1)
                                            {{ 'Low' }}
                                            @endif
                                        </span>
                                      </p>
                                      <a class="dropdown-item" href="#">
                                        Due Date:
                                        <span class="badge badge-warning text-uppercase">{{ $task->due_date }}</span> 
                            </a>
                            <div class="dropdown-divider"></div>
                          
                            
                                
                                  
                              <a type="button" class="text-dark py-3 ml-3" onclick="taskComment({{ $task->id }})" data-toggle="modal" data-target="#commentModal" >
                                <i class="fas fa-comments">&nbsp;&nbsp;Add Comments</i>
                               
                              </a>
                          


                                    
                                                                
                             
                            </div>

                          </div>
                      </div>
                    </td>
                    <td class="align-middle " style="width: 25%; >
                    
                      <div class="btn-group align-middle"  >
                        <script>
                          $(':input').on('change keyup input', function() {
                                 console.log('changed'  + element.clicked + );
                                    });
  
                          function onInput(element) {
                            console.log('Agreement changed to ' + element.clicked + ' by oninput event.');
                                        }
  
                        </script>
                        <a type="button" onclick="collapseComments({{ $task->id }})">
                          <i class="fas fa-comments"></i>
                          <span class="badge badge-danger navbar-badge "style="width: 15%; id="status_update{{ $task->id }}">{{ $task->comments->where('is_read', 0)->count() ?? 0 }}</span>
                          </a>
                        </a>
                      </div>
                    </td>
                    <td class="align-middle" style="width: 25%;>
                      <a class="dropdown dropdown-list-toggle text-dark" style="width: 25%; margin-left:200px;">
                        <a href="#" data-toggle="dropdown"
                           class="notification-toggle action-dropdown  position-xs-bottom text-dark">
                            <i class="fas fa-ellipsis-v action-toggle"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="dropdown-list-content dropdown-list-icons">
                                <a href="{{ route('admin.task_edit',$task->id) }}" class="dropdown-item dropdown-item-desc edit-btn"
                                   data-id="1"><i
                                            class="fas fa-edit mr-2 card-edit-icon"></i> Edit
                                </a>
                                <a href="{{ route('admin.task_delete',$task->id) }}" class="dropdown-item dropdown-item-desc delete-btn"
                                   data-id="1"><i
                                            class="fas fa-trash mr-2 card-delete-icon"></i>Delete
                                </a>
                            </div>
                        </div>

                    </td>