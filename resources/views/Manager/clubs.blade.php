@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row d-flex justify-content-center">
                        <div class="col-10 mb-4">
                        <!-- Illustrations -->
                        <div class="card shadow mb-4">
                                    <div class="card-header py-3 d-flex justify-content-between">
                                        <h6 class="m-0 font-weight-bold text-primary">Listes des evenements</h6>
                                        <button  class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Créer un evenement</button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                <form method="POST" action="{{ url('/admin/event/store') }}">
                                                    @csrf
                                                    

                                                    <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                                                    <button type="submit" class="btn btn-danger">Enregistrer</button>
                                                </div>
                                                    
                                                </form>
                                                </div>
                                                
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Fin Model-->
                                    </div>
                                    <div class="card-body">
                                    <table class="table table-striped">
                                    <thead>
                                        <tr>
                                        
                                        <th scope="col">Name</th>
                                        <th scope="col">description</th>
                                        
                                        
                                        <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($clubs as $club)
                                            <tr>
                                                <td>{{$club->name}}</td>
                                                <td>{{$club->description}}</td>
                                                <td><button  class="btn btn-success" data-bs-toggle="modal" data-bs-target="#test">Modification</button>
                                                     <!-- Modal -->
                                                    <div class="modal fade" id="test" tabindex="-1" aria-labelledby="testLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="testLabel">Modifier evenement</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                            <form method="POST" action="{{ url('/admin/event/'.$event->id.'/update') }}">
                                                                @csrf
                                                                @method('PUT')
                                    
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                                                                    <button type="submit" class="btn btn-danger">Modifier</button>
                                                                </div>
                                                                    
                                                            </form>
                                                            </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Fin Model-->
                                                </td>
                                            </tr>
                                        @endforeach 
                                    </tbody>
                                </table>
                                    </div>
                                </div>
                        </div>
                    </div>
                    

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Blood App 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
</div>
@endsection
