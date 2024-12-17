<div class="profile-dropdown position-relative" data-simplebar>
    <div class="py-3 px-7 pb-0">
        <h5 class="mb-0 fs-5 fw-semibold">User Profile</h5>
    </div>
    <div class="d-flex align-items-center py-9 mx-7 border-bottom">
        <img src="{{ URL::asset('build/images/profile/user-1.jpg') }}" class="rounded-circle" width="80" height="80"
            alt="modernize-img" />
        <div class="ms-3">
            <h5 class="mb-1 fs-3">Mathew Anderson</h5>
            <span class="mb-1 d-block">Designer</span>
            <p class="mb-0 d-flex align-items-center gap-2">
                <i class="ti ti-mail fs-4"></i> info@modernize.com
            </p>
        </div>
    </div>
    <div class="message-body">
        <a href="/main/page-user-profile" class="py-8 px-7 mt-8 d-flex align-items-center">
            <span class="d-flex align-items-center justify-content-center text-bg-light rounded-1 p-6">
                <img src="{{ URL::asset('build/images/svgs/icon-account.svg') }}" alt="modernize-img" width="24"
                    height="24" />
            </span>
            <div class="w-100 ps-3">
                <h6 class="mb-1 fs-3 fw-semibold lh-base">My Profile</h6>
                <span class="fs-2 d-block text-body-secondary">Account Settings</span>
            </div>
        </a>
        <a href="/main/app-email" class="py-8 px-7 d-flex align-items-center">
            <span class="d-flex align-items-center justify-content-center text-bg-light rounded-1 p-6">
                <img src="{{ URL::asset('build/images/svgs/icon-inbox.svg') }}" alt="modernize-img" width="24"
                    height="24" />
            </span>
            <div class="w-100 ps-3">
                <h6 class="mb-1 fs-3 fw-semibold lh-base">My Inbox</h6>
                <span class="fs-2 d-block text-body-secondary">Messages & Emails</span>
            </div>
        </a>
        <a href="/main/app-notes" class="py-8 px-7 d-flex align-items-center">
            <span class="d-flex align-items-center justify-content-center text-bg-light rounded-1 p-6">
                <img src="{{ URL::asset('build/images/svgs/icon-tasks.svg') }}" alt="modernize-img" width="24"
                    height="24" />
            </span>
            <div class="w-100 ps-3">
                <h6 class="mb-1 fs-3 fw-semibold lh-base">My Task</h6>
                <span class="fs-2 d-block text-body-secondary">To-do and Daily Tasks</span>
            </div>
        </a>
    </div>
    <div class="d-grid py-4 px-7 pt-8">
        <div class="upgrade-plan bg-primary-subtle position-relative overflow-hidden rounded-4 p-4 mb-9">
            <div class="row">
                <div class="col-6">
                    <h5 class="fs-4 mb-3 fw-semibold">Unlimited Access</h5>
                    <button class="btn btn-primary">Upgrade</button>
                </div>
                <div class="col-6">
                    <div class="m-n4 unlimited-img">
                        <img src="{{ URL::asset('build/images/backgrounds/unlimited-bg.png') }}" alt="modernize-img"
                            class="w-100" />
                    </div>
                </div>
            </div>
        </div>
        <form action="{{ route('admin.logout') }}" method="POST">
            @csrf
            <button class="btn btn-outline-primary">Log Out</button>
        </form>
    </div>
</div>
