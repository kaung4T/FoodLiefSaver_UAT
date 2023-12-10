
<nav class="navbar navbar-expand-lg fixed-top p-0 px-4 px-lg-5">
        <a href="{{url('/')}}" class="navbar-brand d-flex align-items-center">
            <h2 class="m-0 text-primary">
                <img class="img-fluid me-2 rounded-5" src="{{asset('assets/ui/img/icon-3.png')}}" alt="">EV Power</h2>
        </a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-4 py-lg-0">
                 <a href="{{url('/')}}" class="nav-item nav-link active">Home</a>

               <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Company</a>
                <div class="dropdown-menu shadow-sm m-0">
                    <a href="{{route('about.page')}}" class="dropdown-item"> About </a>
                    <a href="{{route('contact.page')}}" class="dropdown-item">Contacts</a>
                </div>
            </div>
                
              <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Products</a>
                <div class="dropdown-menu shadow-sm m-0">
                    <a href="#" class="dropdown-item">Tesla / Panasonic</a>
                    <a href="#" class="dropdown-item">LG Chem</a>
                    <a href="#" class="dropdown-item">Samsung SDI</a>
                </div>
            </div>

              <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Earnings</a>
                <div class="dropdown-menu shadow-sm m-0">
                    <a href="#" class="dropdown-item"> Subscriptions </a>
                    <a href="#" class="dropdown-item"> Instruction</a>
                </div>
            </div>

              <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Milestones</a>
                <div class="dropdown-menu shadow-sm m-0">
                    <a href="#" class="dropdown-item"> Investment </a>
                    <a href="#" class="dropdown-item"> Manifesting </a>
                    <a href="#" class="dropdown-item"> Trading Report </a>
                </div>
            </div>

                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Features</a>
                    <div class="dropdown-menu shadow-sm m-0">
                        <a href="#" class="dropdown-item">Account</a>
                        <a href="#" class="dropdown-item">Transfer</a>
                        <a href="#" class="dropdown-item">Card</a>
                        <a href="#" class="dropdown-item">Crypto Service</a>
                    </div>
                </div>
             
            </div>
            <div class="h-100 d-lg-inline-flex align-items-center d-block">
                <a type="button" class="btn btn-primary text-light me-2" href="{{route('login')}}"> <i class="fa-solid fa-right-to-bracket"></i> Login</i></a>
            </div>

            <div class="header-icons">
                <a class="mobile-hide search-bar-icon" href="#"><i
                    class="fas fa-search"></i></a>
                    </div>

             <div class="googleNav">
                    <div class="goog-te-gadget" id="google_translate_element">
                </div>
                </div>

                   <div class="search-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<span class="close-btn"><i class="fas fa-window-close"></i></span>
					<div class="search-bar">
						<div class="search-bar-tablecell">
							<h3>Search For:</h3>
							<input type="text" placeholder="Keywords">
							<button type="submit">Search <i class="fas fa-search"></i></button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
        </div>
    </nav>

 