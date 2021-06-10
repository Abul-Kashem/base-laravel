<div class="modal fade" id="store_or_update_modal" tabindex="-1" role="dialog" aria-labelledby="model-1"
    style="display: block;" aria-modal="true">
    <div class="modal-dialog" role="document">

        <!-- Modal Content -->
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header bg-primary">
                <h3 class="modal-title text-white" id="model-1"></h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <!-- /modal header -->

            <form id="store_or_update_form" method="post">
                @csrf
                <!-- Modal Body -->
                <div class="modal-body">
                    <input type="hidden" name="update_id" id="update_id">
                    <x-form.textbox labelName="Menu Name" name="menu_name" required="required" col="col-md-12" placeholder="Enter menu name"/>
                    <x-form.selectbox labelName="Deletable" name="deletable" required="required" col="col-md-12" class="selectpicker">
                        @foreach (DELETABLE as $key => $item)
                            <option value="{{ $key }}">{{ $item }}</option>
                        @endforeach
                    </x-form.selectbox>
                </div>
                <!-- /modal body -->
            </form>

            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">Save changes</button>
            </div>
            <!-- /modal footer -->

        </div>
        <!-- /modal content -->

    </div>
</div>
