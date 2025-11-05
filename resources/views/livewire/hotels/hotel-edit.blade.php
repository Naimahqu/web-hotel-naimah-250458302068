<div>
     <main id="main" class="main">

    <div class="pagetitle">
      <h1>Create Hotels</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Pages</li>
          <li class="breadcrumb-item active">Blank</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
                <div class="card-title">
                    <div class="row">
                        <div class="col-6">
                    <h5 class="card-title">Edit Hotel</h5>
                        </div>
                        <div class="col-6">
                        </div>
                    </div>
                </div>
              

                <form wire:submit.prevent='update'>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" wire:model="name">
                    @error('name')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                  <div class="col-sm-10">
                    <input wire:model="email" type="email" class="form-control">
                     @error('email')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Phone</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" wire:model="phone">
                     @error('phone')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                  </div>
                </div>

                 <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-2 col-form-label">Address</label>
                  <div class="col-sm-10">
                    <textarea  wire:model="address" class="form-control" style="height: 100px"></textarea>
                     @error('address')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Stars</label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control" wire:model="stars">
                     @error('stars')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Check In Time</label>
                  <div class="col-sm-10">
                    <input type="datetime-local" class="form-control" wire:model="check_in_time">
                     @error('check_in_time')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Check Out Time</label>
                  <div class="col-sm-10">
                    <input type="datetime-local" class="form-control" wire:model="check_out_time">
                     @error('check_out_time')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                  </div>
                </div>


                <div class="row mb-3">
                  <div class="col-sm-12">
                    <button type="submit" class="btn btn-primary float-end">Create</button>
                  </div>
                </div>

              </form>
        </div>
          </div>

          
        </div>
    </section>

  </main>
  <!-- End #main -->
</div>
