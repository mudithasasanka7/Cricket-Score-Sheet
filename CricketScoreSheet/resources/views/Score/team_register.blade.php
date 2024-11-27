@extends('Score.layout')
@section('contend')

            <h2 class="">Team Register</h2>
            <h6 class="text-danger">@OnlineScore</h6>
            <div class="container">
            <a href="{{route('onlinescore.index')}}" class="btn btn-warning">Back</a>
</div>
            <div class="container pt-5">
        <div class="bg-light pt-3 pb-5 pl-3 pr-3">
            <div class="container mx-auto">
                <form action="{{route('sheet.store')}}" method="post">
                    @csrf
                    <table>
                        <!-- 1 team form -->
                        <tr>
                            <th>
                                <label for="">Team Name</label>
                            </th>
                            <th>
                                <label for="">Caption Name</label>
                            </th>
                            <th>
                                <label for="">Keeper Name</label>
                            </th>
                        </tr>
                        <tr>
                            <td>
                                <div class="container">
                                    <input type="text" class="form-control size-20">
                                </div>
                            </td>
                            <td>
                                <div class="container">
                                    <input type="text" class="form-control size-20">
                                </div>
                            </td>
                            <td>
                                <div class="container">
                                    <input type="text" class="form-control size-20">
                                </div>
                            </td>
                            
                        </tr>
                        <!-- 1 team form end -->
                        <!-- 2 team form -->
                        <tr>
                            <th>
                                <label for="">Team Name</label>
                            </th>
                            <th>
                                <label for="">Caption Name</label>
                            </th>
                            <th>
                                <label for="">Keeper Name</label>
                            </th>
                        </tr>
                        <tr>
                            <td>
                                <div class="container">
                                    <input type="text" class="form-control size-20">
                                </div>
                            </td>
                            <td>
                                <div class="container">
                                    <input type="text" class="form-control size-20">
                                </div>
                            </td>
                            <td>
                                <div class="container">
                                    <input type="text" class="form-control size-20">
                                </div>
                            </td>
                            
                        </tr>
                        <!-- 2 team form end -->
                        <!-- 3 team form -->
                        <tr>
                            <th>
                                <label for="">Team Name</label>
                            </th>
                            <th>
                                <label for="">Caption Name</label>
                            </th>
                            <th>
                                <label for="">Keeper Name</label>
                            </th>
                        </tr>
                        <tr>
                            <td>
                                <div class="container">
                                    <input type="text" class="form-control size-20">
                                </div>
                            </td>
                            <td>
                                <div class="container">
                                    <input type="text" class="form-control size-20">
                                </div>
                            </td>
                            <td>
                                <div class="container">
                                    <input type="text" class="form-control size-20">
                                </div>
                            </td>
                        
                        </tr>
                        <!-- 3 team form end -->
                        <!-- 4 team form -->
                        <tr>
                            <th>
                                <label for="">Team Name</label>
                            </th>
                            <th>
                                <label for="">Caption Name</label>
                            </th>
                            <th>
                                <label for="">Keeper Name</label>
                            </th>
                        </tr>
                        <tr>
                            <td>
                                <div class="container">
                                    <input type="text" class="form-control size-20">
                                </div>
                            </td>
                            <td>
                                <div class="container">
                                    <input type="text" class="form-control size-20">
                                </div>
                            </td>
                            <td>
                                <div class="container">
                                    <input type="text" class="form-control size-20">
                                </div>
                            </td>
                       
                        </tr>
                        <!-- 4 team form end -->
                        <!-- 5 team form -->
                        <tr>
                            <th>
                                <label for="">Team Name</label>
                            </th>
                            <th>
                                <label for="">Caption Name</label>
                            </th>
                            <th>
                                <label for="">Keeper Name</label>
                            </th>
                        </tr>
                        <tr>
                            <td>
                                <div class="container">
                                    <input type="text" class="form-control size-20">
                                </div>
                            </td>
                            <td>
                                <div class="container">
                                    <input type="text" class="form-control size-20">
                                </div>
                            </td>
                            <td>
                                <div class="container">
                                    <input type="text" class="form-control size-20">
                                </div>
                            </td>
                         
                        </tr>
                        <!-- 5 team form end -->
                        <!-- 6 team form -->
                        <tr>
                            <th>
                                <label for="">Team Name</label>
                            </th>
                            <th>
                                <label for="">Caption Name</label>
                            </th>
                            <th>
                                <label for="">Keeper Name</label>
                            </th>
                        </tr>
                        <tr>
                            <td>
                                <div class="container">
                                    <input type="text" class="form-control size-20">
                                </div>
                            </td>
                            <td>
                                <div class="container">
                                    <input type="text" class="form-control size-20">
                                </div>
                            </td>
                            <td>
                                <div class="container">
                                    <input type="text" class="form-control size-20">
                                </div>
                            </td>
                            
                        </tr>
                        <!-- 6 team form end -->
                        <!-- 7 team form -->
                        <tr>
                            <th>
                                <label for="">Team Name</label>
                            </th>
                            <th>
                                <label for="">Caption Name</label>
                            </th>
                            <th>
                                <label for="">Keeper Name</label>
                            </th>
                        </tr>
                        <tr>
                            <td>
                                <div class="container">
                                    <input type="text" class="form-control size-20">
                                </div>
                            </td>
                            <td>
                                <div class="container">
                                    <input type="text" class="form-control size-20">
                                </div>
                            </td>
                            <td>
                                <div class="container">
                                    <input type="text" class="form-control size-20">
                                </div>
                            </td>
                            
                        </tr>
                        <!-- 7 team form end -->
                        <!-- 8 team form -->
                        <tr>
                            <th>
                                <label for="">Team Name</label>
                            </th>
                            <th>
                                <label for="">Caption Name</label>
                            </th>
                            <th>
                                <label for="">Keeper Name</label>
                            </th>
                        </tr>
                        <tr>
                            <td>
                                <div class="container">
                                    <input type="text" class="form-control size-20">
                                </div>
                            </td>
                            <td>
                                <div class="container">
                                    <input type="text" class="form-control size-20">
                                </div>
                            </td>
                            <td>
                                <div class="container">
                                    <input type="text" class="form-control size-20">
                                </div>
                            </td>
                        
                        </tr>
                        <!-- 8 team form end -->

                    </table>
                    <div class="contaner mt-3">
                        
                        <input type="reset" class="btn btn-danger" value="Clean">
                        <button type="submit" class="btn btn-success">Save & Next</button>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
    @endsection