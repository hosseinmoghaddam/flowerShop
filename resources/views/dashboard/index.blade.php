@extends('dashboard.layout.container')

@section('content')
    <div class="row">

        <div class="badges">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <strong>Labels</strong>
                    </div>
                    <div class="card-body">
                        <p class="text-muted m-b-15">Use the <code>.label</code> class,&nbsp; followed by one of the six contextual classes <code>.label-default</code>, <code>.label-primary</code>, <code>.label-success</code>,
                            <code>.label-info</code>, <code>.label-warning</code> or <code>.label-danger</code>, within a <code>&lt;span&gt;</code> element to create a label:</p>

                        <h1>تست فونت</h1>
                        <h2>Example heading <span class="badge badge-secondary">New</span></h2>
                        <h3>Example heading <span class="badge badge-secondary">New</span></h3>
                        <h4>Example heading <span class="badge badge-secondary">New</span></h4>
                        <h5>Example heading <span class="badge badge-secondary">New</span></h5>
                        <h6>Example heading <span class="badge badge-secondary">New</span></h6>
                    </div>
                </div>

            </div>


        </div> <!-- .badges -->

    </div><!-- .row -->

    @endsection