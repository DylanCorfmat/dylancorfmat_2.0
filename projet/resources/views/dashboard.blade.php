<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
    @section('content')
        <div class="row p-3">
            <div class="col-12 col-sm-6 mb-4">
                <div class="card">
                    <div class="card-header bg-secondary text-white">
                        <div class="card-title">
                            <strong>Experiences</strong>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="card-title">
{{--                            Les dernières expériences enregistrées sont :--}}
{{--                            <br/>--}}
                            <table class="col-12 table">
                            @foreach($experiences as $experience)
                                <tr>
                                    <td>
                                        <div class="row d-flex justify-content-between">
                                            <p class="col-8 m-0"><strong>{{$experience->titre}}</strong></p>
                                            <div class="btn-group float-end col-auto align-middle">
                                                <i type="button" id="action-dropdown-menu"
                                                   class="fa-solid fa-ellipsis-vertical dropdown-toggle-split action-dropdown-menu"
                                                   data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
                                                <div class="dropdown-menu" id="dropdown-menu">
                                                    <a href="" target="_blank"
                                                       class="dropdown-item">View</a>
                                                    <a href=""
                                                       class="dropdown-item">Edit</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item text-danger delete-sequence" role="button"
                                                       data-bs-toggle="modal"
                                                       data-bs-target="#danger-header-modal" data-id=""
                                                       href="#">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </td>

                                    {{--                                    <td><a href="#" target="_blank" class="btn btn-primary">View</a></td>--}}
{{--                                    <td><a href="#" class="btn btn-secondary">Edit</a></td>--}}
{{--                                    <td><a href="#" class="btn btn-danger">Delete</a></td>--}}
                                </tr>
                            @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 mb-4">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">
                            Projets
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="card-title">
{{--                            Les derniers projets enregistrés sont :--}}
{{--                            <br/>--}}
                            <table class="col-12 table">
                                @foreach($projets as $projet)
                                    <tr class="col-12">
                                        <td class="d-flex justify-content-between col-12"><strong>{{$projet->titre}}</strong>
                                            <div class="btn-group float-end col-auto align-middle">
                                                <i type="button" id="action-dropdown-menu"
                                                   class="fa-solid fa-ellipsis-vertical dropdown-toggle-split action-dropdown-menu"
                                                   data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
                                                <div class="dropdown-menu" id="dropdown-menu">
                                                    <a href="" target="_blank"
                                                       class="dropdown-item">View</a>
                                                    <a href=""
                                                       class="dropdown-item">Edit</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item text-danger delete-sequence" role="button"
                                                       data-bs-toggle="modal"
                                                       data-bs-target="#danger-header-modal" data-id=""
                                                       href="#">Delete</a>
                                                </div>
                                            </div>
                                        </td>

                                        {{--                                    <td><a href="#" target="_blank" class="btn btn-primary">View</a></td>--}}
                                        {{--                                    <td><a href="#" class="btn btn-secondary">Edit</a></td>--}}
                                        {{--                                    <td><a href="#" class="btn btn-danger">Delete</a></td>--}}
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 mb-4">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">
                            Commentaires
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="card-title">
                            Les derniers commentaires publiés sont les suivants :
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-6 mb-4">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">
                            Compétences
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="card-title">
                            Vous avez accumulé ces compétences dernièrement :
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-6 mb-4">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">
                            Employeurs
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="card-title">
                            Voici les employeurs que vous avez sur votre site :
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-6 mb-4">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">
                            Contacts
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="card-title">
                            Vous avez reçu __ nouveaux messages :
                        </div>

                    </div>
                </div>
            </div>
        </div>
    @endsection
</x-app-layout>
