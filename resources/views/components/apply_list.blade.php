<div class="row">
    <div class="col-lg-12">
        <div class="card m-2">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h4 class="card-title">OnGoing Apllications of Candidate</h4>
                    </div><!--end col-->
                    <div class="col-auto align-self-center">
                        
                        {{-- <a class=" btn btn-sm btn-soft-primary" href="#" role="button"><i class="fas fa-plus me-2"></i>New Task</a> --}}
                    </div>
                </div> <!--end row-->
            </div><!--end card-header-->
            <div class="card-body">
                <div class="table-responsive browser_users">
                    <table id="datatable"class="table mb-0">
                        <thead class="table-light">
                            
                            <tr>
                                <th class="border-top-0">Applied date</th>
                           
                                <th class="border-top-0">Company</th>
                          
                                
                                <th class="border-top-0">Vacant Position</th>
                                <th class="border-top-0">Type Of Job</th>
                         
                                <th class="border-top-0">Stages</th>
                                <th class="border-top-0">Status</th>
                            
                            </tr><!--end tr-->
                        </thead>
                        <tbody>
                            @foreach ($applied as $item)
                            <tr data-id="{{ $item->id }}">
                                <td>{{ $item->pivot->created_at->format('d-m-Y') }}</td>
                             
                                <td> {{ $item->client->org_name }}</td>
                            
                                <td> {{ $item->vacant_position }}</td>
                                <td> {{ isset($item->job_type)?$item->job_type:'N/A' }}</td>
                                
                                <td> 
                                    {{  $item->pivot->stage_id }}</td>
                                <td> <span class="badge badge-soft-{{ $item->status?'warning':'primary' }}">{{ $item->pivot->is_rejected?'Rejected':'Proceeding' }}</span></td>
                               
                            </tr><!--end tr-->
                            @endforeach
                            
                        

                        </tbody>
                    </table> <!--end table-->
                </div><!--end /div-->
            </div><!--end card-body-->
        </div><!--end card-->
    </div>
</div>