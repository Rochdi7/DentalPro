@extends('layouts.main')

@section('title', 'Social Media')
@section('breadcrumb-item', 'Application')

@section('breadcrumb-item-active', 'Social Media')

@section('css')
@endsection

@section('content')
 <!-- [ Main Content ] start -->
 <div class="row">
  <!-- [ sample-page ] start -->
  <div class="col-sm-12">
    <div class="card social-profile">
      <img src="{{ URL::asset('build/images/application/img-profile-cover.jpg') }}" alt="" class="w-100 card-img-top" />
      <div class="card-body pt-0">
        <div class="row align-items-end">
          <div class="col-md-auto text-md-start">
            <img class="img-fluid img-profile-avtar" src="{{ URL::asset('build/images/user/avatar-5.jpg') }}" alt="User image" />
          </div>
          <div class="col">
            <div class="row justify-content-between align-items-end">
              <div class="col-md-5 col-xl-6 soc-profile-data">
                <h5 class="mb-1">Stebin Ben</h5>
                <p class="mb-0">UI/UX Designer <a href="#" class="link-primary">Follow</a></p>
              </div>
              <div class="col-md-7 col-xl-6 col-xxl-5">
                <div class="row g-1 text-center">
                  <div class="col-3">
                    <h5 class="mb-0">239k</h5>
                    <p class="text-muted mb-0">Followers</p>
                  </div>
                  <div class="col-3 border border-top-0 border-bottom-0">
                    <h5 class="mb-0">539k</h5>
                    <p class="text-muted mb-0">Following</p>
                  </div>
                  <div class="col-3 border border-top-0 border-bottom-0">
                    <h5 class="mb-0">400</h5>
                    <p class="text-muted mb-0">Post</p>
                  </div>
                  <div class="col-3">
                    <h5 class="mb-0">539k</h5>
                    <p class="text-muted mb-0">Like</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-body py-0">
        <ul class="nav nav-tabs profile-tabs" id="myTab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="profile-tab" data-bs-toggle="tab" href="#profile" role="tab" aria-selected="true">
              <i class="ph-duotone ph-user-circle me-2"></i> Profile
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="followers-tab" data-bs-toggle="tab" href="#followers" role="tab" aria-selected="false">
              <i class="ph-duotone ph-users me-2"></i> Friends
              <span class="badge bg-secondary rounded-pill ms-2">99</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="friends-tab" data-bs-toggle="tab" href="#friends" role="tab" aria-selected="false">
              <i class="ph-duotone ph-user-circle-plus me-2"></i> Friends Request
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="gallery-tab" data-bs-toggle="tab" href="#gallery" role="tab" aria-selected="false">
              <i class="ph-duotone ph-image me-2"></i> Gallery
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-8 col-xxl-9">
        <div class="tab-content">
          <div class="tab-pane show active" id="profile" role="tabpanel">
            <div class="card">
              <div class="card-body user-story-block">
                <div class="card user-story add-story">
                  <img src="{{ URL::asset('build/images/application/img-story-1.jpg') }}" class="card-img" alt="img" />
                  <div class="card-img-overlay">
                    <div class="btn-plus">
                      <i class="ti ti-plus"></i>
                    </div>
                    <h6 class="text-white mb-0">Add Story</h6>
                  </div>
                </div>
                <div class="horizontal-scroll">
                  <a class="card user-story" data-lightbox="../build/images/application/img-story-2.jpg">
                    <img src="{{ URL::asset('build/images/application/img-story-2.jpg') }}" class="card-img" alt="img" />
                    <div class="card-img-overlay">
                      <img src="{{ URL::asset('build/images/user/avatar-2.jpg') }}" class="wid-30 rounded-circle img-user" alt="img" />
                    </div>
                  </a>
                  <a class="card user-story" data-lightbox="../build/images/application/img-story-3.jpg">
                    <img src="{{ URL::asset('build/images/application/img-story-3.jpg') }}" class="card-img" alt="img" />
                    <div class="card-img-overlay">
                      <img src="{{ URL::asset('build/images/user/avatar-3.jpg') }}" class="wid-30 rounded-circle img-user" alt="img" />
                    </div>
                  </a>
                  <a class="card user-story" data-lightbox="../build/images/application/img-story-4.jpg">
                    <img src="{{ URL::asset('build/images/application/img-story-4.jpg') }}" class="card-img" alt="img" />
                    <div class="card-img-overlay">
                      <img src="{{ URL::asset('build/images/user/avatar-4.jpg') }}" class="wid-30 rounded-circle img-user" alt="img" />
                    </div>
                  </a>
                  <a class="card user-story" data-lightbox="../build/images/application/img-story-5.jpg">
                    <img src="{{ URL::asset('build/images/application/img-story-5.jpg') }}" class="card-img" alt="img" />
                    <div class="card-img-overlay">
                      <img src="{{ URL::asset('build/images/user/avatar-5.jpg') }}" class="wid-30 rounded-circle img-user" alt="img" />
                    </div>
                  </a>
                  <a class="card user-story" data-lightbox="../build/images/application/img-story-6.jpg">
                    <img src="{{ URL::asset('build/images/application/img-story-6.jpg') }}" class="card-img" alt="img" />
                    <div class="card-img-overlay">
                      <img src="{{ URL::asset('build/images/user/avatar-1.jpg') }}" class="wid-30 rounded-circle img-user" alt="img" />
                    </div>
                  </a>
                  <a class="card user-story" data-lightbox="../build/images/application/img-story-1.jpg">
                    <img src="{{ URL::asset('build/images/application/img-story-1.jpg') }}" class="card-img" alt="img" />
                    <div class="card-img-overlay">
                      <img src="{{ URL::asset('build/images/user/avatar-4.jpg') }}" class="wid-30 rounded-circle img-user" alt="img" />
                    </div>
                  </a>
                  <a class="card user-story" data-lightbox="../build/images/application/img-story-2.jpg">
                    <img src="{{ URL::asset('build/images/application/img-story-2.jpg') }}" class="card-img" alt="img" />
                    <div class="card-img-overlay">
                      <img src="{{ URL::asset('build/images/user/avatar-2.jpg') }}" class="wid-30 rounded-circle img-user" alt="img" />
                    </div>
                  </a>
                  <a class="card user-story" data-lightbox="../build/images/application/img-story-3.jpg">
                    <img src="{{ URL::asset('build/images/application/img-story-3.jpg') }}" class="card-img" alt="img" />
                    <div class="card-img-overlay">
                      <img src="{{ URL::asset('build/images/user/avatar-3.jpg') }}" class="wid-30 rounded-circle img-user" alt="img" />
                    </div>
                  </a>
                  <a class="card user-story" data-lightbox="../build/images/application/img-story-4.jpg">
                    <img src="{{ URL::asset('build/images/application/img-story-4.jpg') }}" class="card-img" alt="img" />
                    <div class="card-img-overlay">
                      <img src="{{ URL::asset('build/images/user/avatar-4.jpg') }}" class="wid-30 rounded-circle img-user" alt="img" />
                    </div>
                  </a>
                  <a class="card user-story" data-lightbox="../build/images/application/img-story-5.jpg">
                    <img src="{{ URL::asset('build/images/application/img-story-5.jpg') }}" class="card-img" alt="img" />
                    <div class="card-img-overlay">
                      <img src="{{ URL::asset('build/images/user/avatar-5.jpg') }}" class="wid-30 rounded-circle img-user" alt="img" />
                    </div>
                  </a>
                  <a class="card user-story" data-lightbox="../build/images/application/img-story-6.jpg">
                    <img src="{{ URL::asset('build/images/application/img-story-6.jpg') }}" class="card-img" alt="img" />
                    <div class="card-img-overlay">
                      <img src="{{ URL::asset('build/images/user/avatar-1.jpg') }}" class="wid-30 rounded-circle img-user" alt="img" />
                    </div>
                  </a>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-body">
                <textarea class="form-control border-0 shadow-none" placeholder="What’s new, Stebin?" rows="1"></textarea>
                <div class="row align-items-center mt-3">
                  <div class="col">
                    <ul class="list-inline ms-auto mb-0">
                      <li class="list-inline-item border-end pe-2 me-2">
                        <a href="#" class="avtar avtar-s btn-link-warning">
                          <i class="ti ti-mood-smile f-18"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#" class="avtar avtar-s btn-link-secondary">
                          <i class="ti ti-photo f-18"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#" class="avtar avtar-s btn-link-secondary">
                          <i class="ti ti-paperclip f-18"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                  <div class="col-auto text-end">
                    <button class="btn btn-primary">Post</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-body">
                <div class="d-flex align-items-center mb-3">
                  <div class="flex-shrink-0">
                    <div class="chat-avtar">
                      <img class="rounded-circle img-fluid wid-40" src="{{ URL::asset('build/images/user/avatar-1.jpg') }}" alt="User image" />
                      <div class="bg-success chat-badge"></div>
                    </div>
                  </div>
                  <div class="flex-grow-1 mx-2">
                    <h5 class="mb-0">John Doe</h5>
                    <span class="text-sm text-muted">Technical Department</span>
                  </div>
                  <div class="flex-shrink-0">
                    <div class="dropdown">
                      <a
                        class="avtar avtar-xs btn-link-secondary dropdown-toggle arrow-none"
                        href="#"
                        data-bs-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false"
                        ><i class="material-icons-two-tone f-18">more_vert</i></a
                      >
                      <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item" href="#">Edit</a>
                        <a class="dropdown-item" href="#">Delete</a>
                      </div>
                    </div>
                  </div>
                </div>
                <p class="mb-3"
                  >Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
                  standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a
                  type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,
                  remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing
                  Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions
                  of Lorem Ipsum.</p
                >
                <div class="row g-2">
                  <div class="col-md-6">
                    <a class="img-post card mb-2" data-lightbox="../build/images/application/img-post-1.jpg">
                      <img src="{{ URL::asset('build/images/application/img-post-1.jpg') }}" alt="img" class="card-img" />
                      <div class="card-img-overlay">
                        <i class="ti ti-search"></i>
                      </div>
                    </a>
                    <div class="row g-2">
                      <div class="col-md-6">
                        <a class="img-post card" data-lightbox="../build/images/application/img-post-2.jpg">
                          <img src="{{ URL::asset('build/images/application/img-post-2.jpg') }}" alt="img" class="card-img" />
                          <div class="card-img-overlay">
                            <i class="ti ti-search"></i>
                          </div>
                        </a>
                      </div>
                      <div class="col-md-6">
                        <a class="img-post card" data-lightbox="../build/images/application/img-post-3.jpg">
                          <img src="{{ URL::asset('build/images/application/img-post-3.jpg') }}" alt="img" class="card-img" />
                          <div class="card-img-overlay">
                            <i class="ti ti-search"></i>
                          </div>
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="row g-2 mb-2">
                      <div class="col-md-6">
                        <a class="img-post card" data-lightbox="../build/images/application/img-post-4.jpg">
                          <img src="{{ URL::asset('build/images/application/img-post-4.jpg') }}" alt="img" class="card-img" />
                          <div class="card-img-overlay">
                            <i class="ti ti-search"></i>
                          </div>
                        </a>
                      </div>
                      <div class="col-md-6">
                        <a class="img-post card" data-lightbox="../build/images/application/img-post-5.jpg">
                          <img src="{{ URL::asset('build/images/application/img-post-5.jpg') }}" alt="img" class="card-img" />
                          <div class="card-img-overlay">
                            <i class="ti ti-search"></i>
                          </div>
                        </a>
                      </div>
                    </div>
                    <a class="img-post card" data-lightbox="../build/images/application/img-post-6.jpg">
                      <img src="{{ URL::asset('build/images/application/img-post-6.jpg') }}" alt="img" class="card-img" />
                      <div class="card-img-overlay">
                        <i class="ti ti-search"></i>
                      </div>
                    </a>
                  </div>
                </div>
                <div class="row my-3">
                  <div class="col">
                    <a href="#" class="btn btn-link-dark m-1">
                      <i class="ph-duotone ph-thumbs-up me-1"></i> 450K <small class="text-muted">Likes</small></a
                    >
                    <a href="#" class="btn btn-link-secondary m-1">
                      <i class="ph-duotone ph-chat-teardrop-dots me-1"></i>500 <small class="text-muted">Comments</small></a
                    >
                    <a href="#" class="btn btn-link-secondary m-1">
                      <i class="ph-duotone ph-share-network me-1"></i>100 <small class="text-muted">Share</small></a
                    >
                    <a href="#" class="btn btn-link-secondary m-1">
                      <i class="ph-duotone ph-book-bookmark me-1"></i>20 <small class="text-muted">Saved</small></a
                    >
                  </div>
                  <div class="col-auto text-end">
                    <div class="d-flex align-items-center">
                      <p class="mb-0 me-2">30 Comments</p>
                      <div class="user-group post-user-group">
                        <img src="{{ URL::asset('build/images/user/avatar-1.jpg') }}" alt="user-image" class="avtar" />
                        <img src="{{ URL::asset('build/images/user/avatar-2.jpg') }}" alt="user-image" class="avtar" />
                        <span class="avtar bg-danger text-white"><span class="f-12">K</span></span>
                        <img src="{{ URL::asset('build/images/user/avatar-3.jpg') }}" alt="user-image" class="avtar" />
                        <span class="avtar bg-success text-white">
                          <svg class="pc-icon m-0">
                            <use xlink:href="#custom-user"></use>
                          </svg>
                        </span>
                        <img src="{{ URL::asset('build/images/user/avatar-4.jpg') }}" alt="user-image" class="avtar" />
                        <span class="avtar bg-light-primary text-primary"><span class="f-12">+2</span></span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="comment-block">
                  <div class="comment">
                    <div class="d-flex align-items-start">
                      <div class="chat-avtar flex-shrink-0">
                        <img class="rounded-circle img-fluid wid-40" src="{{ URL::asset('build/images/user/avatar-1.jpg') }}" alt="User image" />
                        <div class="bg-success chat-badge"></div>
                      </div>
                      <div class="flex-grow-1 ms-3">
                        <h5 class="mb-0">John Doe</h5>
                        <span class="text-sm text-muted">2 hour ago</span>
                      </div>
                    </div>
                    <div class="comment-content">
                      <p class="mb-2 mt-3">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                        industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                        scrambled it to make a type specimen book.</p
                      >
                      <a href="#" class="link-primary mb-1">https://phoenixcoded.net/</a>
                    </div>
                  </div>
                  <div class="comment-content">
                    <div class="mb-4">
                      <a href="#" class="btn btn-link-dark"> <i class="ph-duotone ph-heart me-1 text-danger"></i> 450</a>
                      <a href="#" class="btn btn-link-secondary"> <i class="ph-duotone ph-share-network me-1"></i>100</a>
                    </div>
                  </div>
                  <div class="comment sub-comment">
                    <div class="d-flex align-items-start">
                      <div class="chat-avtar flex-shrink-0">
                        <img class="rounded-circle img-fluid wid-40" src="{{ URL::asset('build/images/user/avatar-1.jpg') }}" alt="User image" />
                        <div class="bg-success chat-badge"></div>
                      </div>
                      <div class="flex-grow-1 ms-3">
                        <h5 class="mb-0">John Doe</h5>
                        <span class="text-sm text-muted">2 hour ago</span>
                      </div>
                    </div>
                    <div class="comment-content">
                      <div class="card mt-3 mb-0">
                        <div class="card-body">
                          <h6>Lorem Ipsum is simply dummy</h6>
                          <p class="mb-2">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                          <a href="#" class="link-primary mb-1">https://phoenixcoded.net/</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="comment-content">
                    <div class="mb-4">
                      <a href="#" class="btn btn-link-dark"> <i class="ph-duotone ph-heart me-1 text-danger"></i> 450</a>
                      <a href="#" class="btn btn-link-secondary"> <i class="ph-duotone ph-share-network me-1"></i>100</a>
                    </div>
                  </div>
                  <div class="comment">
                    <div class="d-flex align-items-start">
                      <div class="chat-avtar flex-shrink-0">
                        <img class="rounded-circle img-fluid wid-40" src="{{ URL::asset('build/images/user/avatar-1.jpg') }}" alt="User image" />
                        <div class="bg-success chat-badge"></div>
                      </div>
                      <div class="flex-grow-1 ms-3">
                        <h5 class="mb-0">John Doe</h5>
                        <span class="text-sm text-muted">2 hour ago</span>
                      </div>
                    </div>
                    <div class="comment-content">
                      <p class="mb-2 mt-3">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                        industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                        scrambled it to make a type specimen book.</p
                      >
                      <a href="#" class="link-primary mb-1">https://phoenixcoded.net/</a>
                    </div>
                  </div>
                  <div class="comment-content">
                    <div class="mb-4">
                      <a href="#" class="btn btn-link-dark"> <i class="ph-duotone ph-heart me-1 text-danger"></i> 450</a>
                      <a href="#" class="btn btn-link-secondary"> <i class="ph-duotone ph-share-network me-1"></i>100</a>
                    </div>
                  </div>
                </div>
                <div class="d-flex align-items-center mt-3">
                  <div class="flex-shrink-0">
                    <img
                      class="img-radius d-none d-sm-inline-flex me-3 wid-40 rounded-circle"
                      src="{{ URL::asset('build/images/user/avatar-1.jpg') }}"
                      alt="User image"
                    />
                  </div>
                  <div class="flex-grow-1 me-3">
                    <div class="input-comment">
                      <input type="email" class="form-control" placeholder="Type a something..." />
                      <ul class="list-inline start-0 mb-0">
                        <li class="list-inline-item border-end pe-2 me-2">
                          <a href="#" class="avtar avtar-xs btn-link-warning">
                            <i class="ti ti-mood-smile f-18"></i>
                          </a>
                        </li>
                      </ul>
                      <ul class="list-inline end-0 mb-0">
                        <li class="list-inline-item">
                          <a href="#" class="avtar avtar-xs btn-link-secondary">
                            <i class="ti ti-photo f-18"></i>
                          </a>
                        </li>
                        <li class="list-inline-item">
                          <a href="#" class="avtar avtar-xs btn-link-secondary">
                            <i class="ti ti-paperclip f-18"></i>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="flex-shrink-0">
                    <a href="#" class="avtar avtar-s btn btn-primary">
                      <i class="ti ti-send f-18"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-body">
                <div class="d-flex align-items-center mb-3">
                  <div class="flex-shrink-0">
                    <div class="chat-avtar">
                      <img class="rounded-circle img-fluid wid-40" src="{{ URL::asset('build/images/user/avatar-1.jpg') }}" alt="User image" />
                      <div class="bg-success chat-badge"></div>
                    </div>
                  </div>
                  <div class="flex-grow-1 mx-2">
                    <h5 class="mb-0">John Doe</h5>
                    <span class="text-sm text-muted">Technical Department</span>
                  </div>
                  <div class="flex-shrink-0">
                    <div class="dropdown">
                      <a
                        class="avtar avtar-xs btn-link-secondary dropdown-toggle arrow-none"
                        href="#"
                        data-bs-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false"
                        ><i class="material-icons-two-tone f-18">more_vert</i></a
                      >
                      <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item" href="#">Edit</a>
                        <a class="dropdown-item" href="#">Delete</a>
                      </div>
                    </div>
                  </div>
                </div>
                <p class="mb-3"
                  >Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
                  standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a
                  type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,
                  remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing
                  Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions
                  of Lorem Ipsum.</p
                >
                <div class="row g-2">
                  <div class="col-12">
                    <div class="ratio ratio-21x9 rounded overflow-hidden">
                      <iframe src="https://www.youtube.com/embed/7lsRnCJpFp4" title="YouTube video" allowfullscreen></iframe>
                    </div>
                  </div>
                </div>
                <div class="row my-3">
                  <div class="col">
                    <a href="#" class="btn btn-link-dark m-1">
                      <i class="ph-duotone ph-thumbs-up me-1"></i> 450K <small class="text-muted">Likes</small></a
                    >
                    <a href="#" class="btn btn-link-secondary m-1">
                      <i class="ph-duotone ph-chat-teardrop-dots me-1"></i>500 <small class="text-muted">Comments</small></a
                    >
                    <a href="#" class="btn btn-link-secondary m-1">
                      <i class="ph-duotone ph-share-network me-1"></i>100 <small class="text-muted">Share</small></a
                    >
                    <a href="#" class="btn btn-link-secondary m-1">
                      <i class="ph-duotone ph-book-bookmark me-1"></i>20 <small class="text-muted">Saved</small></a
                    >
                  </div>
                  <div class="col-auto text-end">
                    <div class="d-flex align-items-center">
                      <p class="mb-0 me-2">30 Comments</p>
                      <div class="user-group post-user-group">
                        <img src="{{ URL::asset('build/images/user/avatar-1.jpg') }}" alt="user-image" class="avtar" />
                        <img src="{{ URL::asset('build/images/user/avatar-2.jpg') }}" alt="user-image" class="avtar" />
                        <span class="avtar bg-danger text-white"><span class="f-12">K</span></span>
                        <img src="{{ URL::asset('build/images/user/avatar-3.jpg') }}" alt="user-image" class="avtar" />
                        <span class="avtar bg-success text-white">
                          <svg class="pc-icon m-0">
                            <use xlink:href="#custom-user"></use>
                          </svg>
                        </span>
                        <img src="{{ URL::asset('build/images/user/avatar-4.jpg') }}" alt="user-image" class="avtar" />
                        <span class="avtar bg-light-primary text-primary"><span class="f-12">+2</span></span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="comment-block">
                  <div class="comment">
                    <div class="d-flex align-items-start">
                      <div class="chat-avtar flex-shrink-0">
                        <img class="rounded-circle img-fluid wid-40" src="{{ URL::asset('build/images/user/avatar-1.jpg') }}" alt="User image" />
                        <div class="bg-success chat-badge"></div>
                      </div>
                      <div class="flex-grow-1 ms-3">
                        <h5 class="mb-0">John Doe</h5>
                        <span class="text-sm text-muted">2 hour ago</span>
                      </div>
                    </div>
                    <div class="comment-content">
                      <p class="mb-2 mt-3">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                        industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                        scrambled it to make a type specimen book.</p
                      >
                      <a href="#" class="link-primary mb-1">https://phoenixcoded.net/</a>
                    </div>
                  </div>
                  <div class="comment-content">
                    <div class="mb-4">
                      <a href="#" class="btn btn-link-dark"> <i class="ph-duotone ph-heart me-1 text-danger"></i> 450</a>
                      <a href="#" class="btn btn-link-secondary"> <i class="ph-duotone ph-share-network me-1"></i>100</a>
                    </div>
                  </div>
                </div>
                <div class="d-flex align-items-center mt-3">
                  <div class="flex-shrink-0">
                    <img
                      class="img-radius d-none d-sm-inline-flex me-3 wid-40 rounded-circle"
                      src="{{ URL::asset('build/images/user/avatar-1.jpg') }}"
                      alt="User image"
                    />
                  </div>
                  <div class="flex-grow-1 me-3">
                    <div class="input-comment">
                      <input type="email" class="form-control" placeholder="Type a something..." />
                      <ul class="list-inline start-0 mb-0">
                        <li class="list-inline-item border-end pe-2 me-2">
                          <a href="#" class="avtar avtar-xs btn-link-warning">
                            <i class="ti ti-mood-smile f-18"></i>
                          </a>
                        </li>
                      </ul>
                      <ul class="list-inline end-0 mb-0">
                        <li class="list-inline-item">
                          <a href="#" class="avtar avtar-xs btn-link-secondary">
                            <i class="ti ti-photo f-18"></i>
                          </a>
                        </li>
                        <li class="list-inline-item">
                          <a href="#" class="avtar avtar-xs btn-link-secondary">
                            <i class="ti ti-paperclip f-18"></i>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <a href="#" class="avtar avtar-s btn btn-primary">
                    <i class="ti ti-send f-18"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane" id="followers" role="tabpanel" aria-labelledby="followers-tab">
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-xl-6 col-xxl-4">
                    <div class="card border shadow-none">
                      <div class="card-body">
                        <div class="text-center">
                          <div class="chat-avtar d-inline-flex">
                            <img
                              class="rounded-circle img-thumbnail img-fluid wid-80"
                              src="{{ URL::asset('build/images/user/avatar-10.jpg') }}"
                              alt="User image"
                            />
                            <i class="chat-badge bg-success mb-2 me-2"></i>
                          </div>
                          <div class="my-3">
                            <h5 class="mb-0">William Bond</h5>
                            <p class="mb-0">DM on <a href="#" class="link-primary">@williambond</a>😍</p>
                          </div>
                        </div>
                        <div class="row g-2">
                          <div class="col-6"
                            ><div class="d-grid"><button class="btn btn-primary">Accept</button></div></div
                          >
                          <div class="col-6"
                            ><div class="d-grid"><button class="btn btn-outline-secondary">Decline</button></div></div
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-6 col-xxl-4">
                    <div class="card border shadow-none">
                      <div class="card-body">
                        <div class="text-center">
                          <div class="chat-avtar d-inline-flex">
                            <img
                              class="rounded-circle img-thumbnail img-fluid wid-80"
                              src="{{ URL::asset('build/images/user/avatar-2.jpg') }}"
                              alt="User image"
                            />
                            <i class="chat-badge bg-danger mb-2 me-2"></i>
                          </div>
                          <div class="my-3">
                            <h5 class="mb-0">William Bond</h5>
                            <p class="mb-0">DM on <a href="#" class="link-primary">@williambond</a>😍</p>
                          </div>
                        </div>
                        <div class="row g-2">
                          <div class="col-6"
                            ><div class="d-grid"><button class="btn btn-primary">Accept</button></div></div
                          >
                          <div class="col-6"
                            ><div class="d-grid"><button class="btn btn-outline-secondary">Decline</button></div></div
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-6 col-xxl-4">
                    <div class="card border shadow-none">
                      <div class="card-body">
                        <div class="text-center">
                          <div class="chat-avtar d-inline-flex">
                            <img
                              class="rounded-circle img-thumbnail img-fluid wid-80"
                              src="{{ URL::asset('build/images/user/avatar-3.jpg') }}"
                              alt="User image"
                            />
                            <i class="chat-badge bg-success mb-2 me-2"></i>
                          </div>
                          <div class="my-3">
                            <h5 class="mb-0">William Bond</h5>
                            <p class="mb-0">DM on <a href="#" class="link-primary">@williambond</a>😍</p>
                          </div>
                        </div>
                        <div class="row g-2">
                          <div class="col-6"
                            ><div class="d-grid"><button class="btn btn-primary">Accept</button></div></div
                          >
                          <div class="col-6"
                            ><div class="d-grid"><button class="btn btn-outline-secondary">Decline</button></div></div
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-6 col-xxl-4">
                    <div class="card border shadow-none">
                      <div class="card-body">
                        <div class="text-center">
                          <div class="chat-avtar d-inline-flex">
                            <img
                              class="rounded-circle img-thumbnail img-fluid wid-80"
                              src="{{ URL::asset('build/images/user/avatar-4.jpg') }}"
                              alt="User image"
                            />
                            <i class="chat-badge bg-danger mb-2 me-2"></i>
                          </div>
                          <div class="my-3">
                            <h5 class="mb-0">William Bond</h5>
                            <p class="mb-0">DM on <a href="#" class="link-primary">@williambond</a>😍</p>
                          </div>
                        </div>
                        <div class="row g-2">
                          <div class="col-6"
                            ><div class="d-grid"><button class="btn btn-primary">Accept</button></div></div
                          >
                          <div class="col-6"
                            ><div class="d-grid"><button class="btn btn-outline-secondary">Decline</button></div></div
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-6 col-xxl-4">
                    <div class="card border shadow-none">
                      <div class="card-body">
                        <div class="text-center">
                          <div class="chat-avtar d-inline-flex">
                            <img
                              class="rounded-circle img-thumbnail img-fluid wid-80"
                              src="{{ URL::asset('build/images/user/avatar-5.jpg') }}"
                              alt="User image"
                            />
                            <i class="chat-badge bg-success mb-2 me-2"></i>
                          </div>
                          <div class="my-3">
                            <h5 class="mb-0">William Bond</h5>
                            <p class="mb-0">DM on <a href="#" class="link-primary">@williambond</a>😍</p>
                          </div>
                        </div>
                        <div class="row g-2">
                          <div class="col-6"
                            ><div class="d-grid"><button class="btn btn-primary">Accept</button></div></div
                          >
                          <div class="col-6"
                            ><div class="d-grid"><button class="btn btn-outline-secondary">Decline</button></div></div
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-6 col-xxl-4">
                    <div class="card border shadow-none">
                      <div class="card-body">
                        <div class="text-center">
                          <div class="chat-avtar d-inline-flex">
                            <img
                              class="rounded-circle img-thumbnail img-fluid wid-80"
                              src="{{ URL::asset('build/images/user/avatar-6.jpg') }}"
                              alt="User image"
                            />
                            <i class="chat-badge bg-success mb-2 me-2"></i>
                          </div>
                          <div class="my-3">
                            <h5 class="mb-0">William Bond</h5>
                            <p class="mb-0">DM on <a href="#" class="link-primary">@williambond</a>😍</p>
                          </div>
                        </div>
                        <div class="row g-2">
                          <div class="col-6"
                            ><div class="d-grid"><button class="btn btn-primary">Accept</button></div></div
                          >
                          <div class="col-6"
                            ><div class="d-grid"><button class="btn btn-outline-secondary">Decline</button></div></div
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-6 col-xxl-4">
                    <div class="card border shadow-none">
                      <div class="card-body">
                        <div class="text-center">
                          <div class="chat-avtar d-inline-flex">
                            <img
                              class="rounded-circle img-thumbnail img-fluid wid-80"
                              src="{{ URL::asset('build/images/user/avatar-7.jpg') }}"
                              alt="User image"
                            />
                            <i class="chat-badge bg-danger mb-2 me-2"></i>
                          </div>
                          <div class="my-3">
                            <h5 class="mb-0">William Bond</h5>
                            <p class="mb-0">DM on <a href="#" class="link-primary">@williambond</a>😍</p>
                          </div>
                        </div>
                        <div class="row g-2">
                          <div class="col-6"
                            ><div class="d-grid"><button class="btn btn-primary">Accept</button></div></div
                          >
                          <div class="col-6"
                            ><div class="d-grid"><button class="btn btn-outline-secondary">Decline</button></div></div
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-6 col-xxl-4">
                    <div class="card border shadow-none">
                      <div class="card-body">
                        <div class="text-center">
                          <div class="chat-avtar d-inline-flex">
                            <img
                              class="rounded-circle img-thumbnail img-fluid wid-80"
                              src="{{ URL::asset('build/images/user/avatar-8.jpg') }}"
                              alt="User image"
                            />
                            <i class="chat-badge bg-success mb-2 me-2"></i>
                          </div>
                          <div class="my-3">
                            <h5 class="mb-0">William Bond</h5>
                            <p class="mb-0">DM on <a href="#" class="link-primary">@williambond</a>😍</p>
                          </div>
                        </div>
                        <div class="row g-2">
                          <div class="col-6"
                            ><div class="d-grid"><button class="btn btn-primary">Accept</button></div></div
                          >
                          <div class="col-6"
                            ><div class="d-grid"><button class="btn btn-outline-secondary">Decline</button></div></div
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-6 col-xxl-4">
                    <div class="card border shadow-none">
                      <div class="card-body">
                        <div class="text-center">
                          <div class="chat-avtar d-inline-flex">
                            <img
                              class="rounded-circle img-thumbnail img-fluid wid-80"
                              src="{{ URL::asset('build/images/user/avatar-9.jpg') }}"
                              alt="User image"
                            />
                            <i class="chat-badge bg-danger mb-2 me-2"></i>
                          </div>
                          <div class="my-3">
                            <h5 class="mb-0">William Bond</h5>
                            <p class="mb-0">DM on <a href="#" class="link-primary">@williambond</a>😍</p>
                          </div>
                        </div>
                        <div class="row g-2">
                          <div class="col-6"
                            ><div class="d-grid"><button class="btn btn-primary">Accept</button></div></div
                          >
                          <div class="col-6"
                            ><div class="d-grid"><button class="btn btn-outline-secondary">Decline</button></div></div
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-6 col-xxl-4">
                    <div class="card border shadow-none">
                      <div class="card-body">
                        <div class="text-center">
                          <div class="chat-avtar d-inline-flex">
                            <img
                              class="rounded-circle img-thumbnail img-fluid wid-80"
                              src="{{ URL::asset('build/images/user/avatar-10.jpg') }}"
                              alt="User image"
                            />
                            <i class="chat-badge bg-success mb-2 me-2"></i>
                          </div>
                          <div class="my-3">
                            <h5 class="mb-0">William Bond</h5>
                            <p class="mb-0">DM on <a href="#" class="link-primary">@williambond</a>😍</p>
                          </div>
                        </div>
                        <div class="row g-2">
                          <div class="col-6"
                            ><div class="d-grid"><button class="btn btn-primary">Accept</button></div></div
                          >
                          <div class="col-6"
                            ><div class="d-grid"><button class="btn btn-outline-secondary">Decline</button></div></div
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-6 col-xxl-4">
                    <div class="card border shadow-none">
                      <div class="card-body">
                        <div class="text-center">
                          <div class="chat-avtar d-inline-flex">
                            <img
                              class="rounded-circle img-thumbnail img-fluid wid-80"
                              src="{{ URL::asset('build/images/user/avatar-2.jpg') }}"
                              alt="User image"
                            />
                            <i class="chat-badge bg-danger mb-2 me-2"></i>
                          </div>
                          <div class="my-3">
                            <h5 class="mb-0">William Bond</h5>
                            <p class="mb-0">DM on <a href="#" class="link-primary">@williambond</a>😍</p>
                          </div>
                        </div>
                        <div class="row g-2">
                          <div class="col-6"
                            ><div class="d-grid"><button class="btn btn-primary">Accept</button></div></div
                          >
                          <div class="col-6"
                            ><div class="d-grid"><button class="btn btn-outline-secondary">Decline</button></div></div
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-6 col-xxl-4">
                    <div class="card border shadow-none">
                      <div class="card-body">
                        <div class="text-center">
                          <div class="chat-avtar d-inline-flex">
                            <img
                              class="rounded-circle img-thumbnail img-fluid wid-80"
                              src="{{ URL::asset('build/images/user/avatar-3.jpg') }}"
                              alt="User image"
                            />
                            <i class="chat-badge bg-success mb-2 me-2"></i>
                          </div>
                          <div class="my-3">
                            <h5 class="mb-0">William Bond</h5>
                            <p class="mb-0">DM on <a href="#" class="link-primary">@williambond</a>😍</p>
                          </div>
                        </div>
                        <div class="row g-2">
                          <div class="col-6"
                            ><div class="d-grid"><button class="btn btn-primary">Accept</button></div></div
                          >
                          <div class="col-6"
                            ><div class="d-grid"><button class="btn btn-outline-secondary">Decline</button></div></div
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-6 col-xxl-4">
                    <div class="card border shadow-none">
                      <div class="card-body">
                        <div class="text-center">
                          <div class="chat-avtar d-inline-flex">
                            <img
                              class="rounded-circle img-thumbnail img-fluid wid-80"
                              src="{{ URL::asset('build/images/user/avatar-4.jpg') }}"
                              alt="User image"
                            />
                            <i class="chat-badge bg-danger mb-2 me-2"></i>
                          </div>
                          <div class="my-3">
                            <h5 class="mb-0">William Bond</h5>
                            <p class="mb-0">DM on <a href="#" class="link-primary">@williambond</a>😍</p>
                          </div>
                        </div>
                        <div class="row g-2">
                          <div class="col-6"
                            ><div class="d-grid"><button class="btn btn-primary">Accept</button></div></div
                          >
                          <div class="col-6"
                            ><div class="d-grid"><button class="btn btn-outline-secondary">Decline</button></div></div
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-6 col-xxl-4">
                    <div class="card border shadow-none">
                      <div class="card-body">
                        <div class="text-center">
                          <div class="chat-avtar d-inline-flex">
                            <img
                              class="rounded-circle img-thumbnail img-fluid wid-80"
                              src="{{ URL::asset('build/images/user/avatar-5.jpg') }}"
                              alt="User image"
                            />
                            <i class="chat-badge bg-success mb-2 me-2"></i>
                          </div>
                          <div class="my-3">
                            <h5 class="mb-0">William Bond</h5>
                            <p class="mb-0">DM on <a href="#" class="link-primary">@williambond</a>😍</p>
                          </div>
                        </div>
                        <div class="row g-2">
                          <div class="col-6"
                            ><div class="d-grid"><button class="btn btn-primary">Accept</button></div></div
                          >
                          <div class="col-6"
                            ><div class="d-grid"><button class="btn btn-outline-secondary">Decline</button></div></div
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-6 col-xxl-4">
                    <div class="card border shadow-none">
                      <div class="card-body">
                        <div class="text-center">
                          <div class="chat-avtar d-inline-flex">
                            <img
                              class="rounded-circle img-thumbnail img-fluid wid-80"
                              src="{{ URL::asset('build/images/user/avatar-6.jpg') }}"
                              alt="User image"
                            />
                            <i class="chat-badge bg-success mb-2 me-2"></i>
                          </div>
                          <div class="my-3">
                            <h5 class="mb-0">William Bond</h5>
                            <p class="mb-0">DM on <a href="#" class="link-primary">@williambond</a>😍</p>
                          </div>
                        </div>
                        <div class="row g-2">
                          <div class="col-6"
                            ><div class="d-grid"><button class="btn btn-primary">Accept</button></div></div
                          >
                          <div class="col-6"
                            ><div class="d-grid"><button class="btn btn-outline-secondary">Decline</button></div></div
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-6 col-xxl-4">
                    <div class="card border shadow-none">
                      <div class="card-body">
                        <div class="text-center">
                          <div class="chat-avtar d-inline-flex">
                            <img
                              class="rounded-circle img-thumbnail img-fluid wid-80"
                              src="{{ URL::asset('build/images/user/avatar-7.jpg') }}"
                              alt="User image"
                            />
                            <i class="chat-badge bg-danger mb-2 me-2"></i>
                          </div>
                          <div class="my-3">
                            <h5 class="mb-0">William Bond</h5>
                            <p class="mb-0">DM on <a href="#" class="link-primary">@williambond</a>😍</p>
                          </div>
                        </div>
                        <div class="row g-2">
                          <div class="col-6"
                            ><div class="d-grid"><button class="btn btn-primary">Accept</button></div></div
                          >
                          <div class="col-6"
                            ><div class="d-grid"><button class="btn btn-outline-secondary">Decline</button></div></div
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-6 col-xxl-4">
                    <div class="card border shadow-none">
                      <div class="card-body">
                        <div class="text-center">
                          <div class="chat-avtar d-inline-flex">
                            <img
                              class="rounded-circle img-thumbnail img-fluid wid-80"
                              src="{{ URL::asset('build/images/user/avatar-8.jpg') }}"
                              alt="User image"
                            />
                            <i class="chat-badge bg-success mb-2 me-2"></i>
                          </div>
                          <div class="my-3">
                            <h5 class="mb-0">William Bond</h5>
                            <p class="mb-0">DM on <a href="#" class="link-primary">@williambond</a>😍</p>
                          </div>
                        </div>
                        <div class="row g-2">
                          <div class="col-6"
                            ><div class="d-grid"><button class="btn btn-primary">Accept</button></div></div
                          >
                          <div class="col-6"
                            ><div class="d-grid"><button class="btn btn-outline-secondary">Decline</button></div></div
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-6 col-xxl-4">
                    <div class="card border shadow-none">
                      <div class="card-body">
                        <div class="text-center">
                          <div class="chat-avtar d-inline-flex">
                            <img
                              class="rounded-circle img-thumbnail img-fluid wid-80"
                              src="{{ URL::asset('build/images/user/avatar-9.jpg') }}"
                              alt="User image"
                            />
                            <i class="chat-badge bg-danger mb-2 me-2"></i>
                          </div>
                          <div class="my-3">
                            <h5 class="mb-0">William Bond</h5>
                            <p class="mb-0">DM on <a href="#" class="link-primary">@williambond</a>😍</p>
                          </div>
                        </div>
                        <div class="row g-2">
                          <div class="col-6"
                            ><div class="d-grid"><button class="btn btn-primary">Accept</button></div></div
                          >
                          <div class="col-6"
                            ><div class="d-grid"><button class="btn btn-outline-secondary">Decline</button></div></div
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane" id="friends" role="tabpanel" aria-labelledby="friends-tab">
            <div class="card">
              <div class="card-header">
                <h5>Personal Details</h5>
              </div>
              <div class="card-body">
                <div class="row g-3">
                  <div class="col-md-4">
                    <p class="mb-0 text-muted">Full Name</p>
                  </div>
                  <div class="col-md-6">
                    <h6 class="mb-0">Akshay Handge</h6>
                  </div>
                </div>
                <div class="row g-3 mt-0">
                  <div class="col-md-4">
                    <p class="mb-0 text-muted">Father's Name</p>
                  </div>
                  <div class="col-md-6">
                    <h6 class="mb-0">Mr. Deepak Handge</h6>
                  </div>
                </div>
                <div class="row g-3 mt-0">
                  <div class="col-md-4">
                    <p class="mb-0 text-muted">Address</p>
                  </div>
                  <div class="col-md-6">
                    <h6 class="mb-0">Street 110-B Kalani Bag, Dewas, M.P. INDIA</h6>
                  </div>
                </div>
                <div class="row g-3 mt-0">
                  <div class="col-md-4">
                    <p class="mb-0 text-muted">Zip Code</p>
                  </div>
                  <div class="col-md-6">
                    <h6 class="mb-0">12345</h6>
                  </div>
                </div>
                <div class="row g-3 mt-0">
                  <div class="col-md-4">
                    <p class="mb-0 text-muted">Phone</p>
                  </div>
                  <div class="col-md-6">
                    <h6 class="mb-0">+0 123456789 , +0 123456789</h6>
                  </div>
                </div>
                <div class="row g-3 mt-0">
                  <div class="col-md-4">
                    <p class="mb-0 text-muted">Email</p>
                  </div>
                  <div class="col-md-6">
                    <h6 class="mb-0"><a href="mailto:support@example.com" class="link-primary">support@example.com</a></h6>
                  </div>
                </div>
                <div class="row g-3 mt-0">
                  <div class="col-md-4">
                    <p class="mb-0 text-muted">Website</p>
                  </div>
                  <div class="col-md-6">
                    <h6 class="mb-0"><a href="#" class="link-primary">http://example.com</a></h6>
                  </div>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header">
                <h5>other Information</h5>
              </div>
              <div class="card-body">
                <div class="row g-3">
                  <div class="col-md-4">
                    <p class="mb-0 text-muted">Occupation</p>
                  </div>
                  <div class="col-md-6">
                    <h6 class="mb-0">Designer</h6>
                  </div>
                </div>
                <div class="row g-3 mt-0">
                  <div class="col-md-4">
                    <p class="mb-0 text-muted">Skills</p>
                  </div>
                  <div class="col-md-6">
                    <h6 class="mb-0">C#, Javascript, Scss</h6>
                  </div>
                </div>
                <div class="row g-3 mt-0">
                  <div class="col-md-4">
                    <p class="mb-0 text-muted">Jobs</p>
                  </div>
                  <div class="col-md-6">
                    <h6 class="mb-0">Phoenixcoded</h6>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane" id="gallery" role="tabpanel" aria-labelledby="gallery-tab">
            <div class="card">
              <div class="card-header">
                <h5>Gallery</h5>
              </div>
              <div class="card-body">
                <div class="row g-2">
                  <div class="col-md-6">
                    <a class="img-post card social-gallery-card" data-lightbox="../build/images/application/img-gallery-1.jpg">
                      <img src="{{ URL::asset('build/images/application/img-gallery-1.jpg') }}" alt="img" class="card-img" />
                      <div class="card-img-overlay">
                        <i class="ti ti-cloud-download"></i>
                      </div>
                    </a>
                  </div>
                  <div class="col-md-6">
                    <div class="row g-2">
                      <div class="col-md-12">
                        <a class="img-post card social-gallery-card" data-lightbox="../build/images/application/img-gallery-2.jpg">
                          <img src="{{ URL::asset('build/images/application/img-gallery-2.jpg') }}" alt="img" class="card-img" />
                          <div class="card-img-overlay">
                            <i class="ti ti-cloud-download"></i>
                          </div>
                        </a>
                      </div>
                      <div class="col-md-12">
                        <a class="img-post card social-gallery-card" data-lightbox="../build/images/application/img-gallery-3.jpg">
                          <img src="{{ URL::asset('build/images/application/img-gallery-3.jpg') }}" alt="img" class="card-img" />
                          <div class="card-img-overlay">
                            <i class="ti ti-cloud-download"></i>
                          </div>
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <a class="img-post card social-gallery-card" data-lightbox="../build/images/application/img-gallery-5.jpg">
                      <img src="{{ URL::asset('build/images/application/img-gallery-5.jpg') }}" alt="img" class="card-img" />
                      <div class="card-img-overlay">
                        <i class="ti ti-cloud-download"></i>
                      </div>
                    </a>
                  </div>
                  <div class="col-md-4">
                    <a class="img-post card social-gallery-card" data-lightbox="../build/images/application/img-gallery-6.jpg">
                      <img src="{{ URL::asset('build/images/application/img-gallery-6.jpg') }}" alt="img" class="card-img" />
                      <div class="card-img-overlay">
                        <i class="ti ti-cloud-download"></i>
                      </div>
                    </a>
                  </div>
                  <div class="col-md-4">
                    <a class="img-post card social-gallery-card" data-lightbox="../build/images/application/img-gallery-4.jpg">
                      <img src="{{ URL::asset('build/images/application/img-gallery-4.jpg') }}" alt="img" class="card-img" />
                      <div class="card-img-overlay">
                        <i class="ti ti-cloud-download"></i>
                      </div>
                    </a>
                  </div>
                  <div class="col-md-6">
                    <a class="img-post card social-gallery-card" data-lightbox="../build/images/application/img-gallery-8.jpg">
                      <img src="{{ URL::asset('build/images/application/img-gallery-8.jpg') }}" alt="img" class="card-img" />
                      <div class="card-img-overlay">
                        <i class="ti ti-cloud-download"></i>
                      </div>
                    </a>
                  </div>
                  <div class="col-md-6">
                    <a class="img-post card social-gallery-card" data-lightbox="../build/images/application/img-gallery-7.jpg">
                      <img src="{{ URL::asset('build/images/application/img-gallery-7.jpg') }}" alt="img" class="card-img" />
                      <div class="card-img-overlay">
                        <i class="ti ti-cloud-download"></i>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-xxl-3">
        <div class="card">
          <div class="card-body">
            <div class="d-flex align-items-center mb-3">
              <div class="flex-shrink-0">
                <img src="{{ URL::asset('build/images/favicon.svg') }}" alt="img" class="img-fluid" />
              </div>
              <div class="flex-grow-1 ms-2">
                <h5 class="mb-0">Light able</h5>
                <span class="text-sm text-muted">Light able@developers.io</span>
              </div>
            </div>
            <div class="d-flex align-items-center">
              <div class="flex-grow-1 me-2">
                <div class="user-group">
                  <img src="{{ URL::asset('build/images/user/avatar-6.jpg') }}" alt="user-image" class="avtar" />
                  <img src="{{ URL::asset('build/images/user/avatar-6.jpg') }}" alt="user-image" class="avtar" />
                  <img src="{{ URL::asset('build/images/user/avatar-7.jpg') }}" alt="user-image" class="avtar" />
                  <img src="{{ URL::asset('build/images/user/avatar-8.jpg') }}" alt="user-image" class="avtar" />
                  <span class="avtar rounded-circle bg-light-warning text-warning">+2</span>
                </div>
              </div>
              <div class="flex-shrink-0">
                <a href="#" class="avtar avtar-s bg-primary rounded-circle text-white"><i class="ti ti-plus f-18"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header d-flex align-items-center justify-content-between">
            <h5>Personal information</h5>
            <div class="dropdown">
              <a
                class="avtar avtar-xs btn-link-secondary dropdown-toggle arrow-none"
                href="#"
                data-bs-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
                ><i class="material-icons-two-tone f-18">more_vert</i></a
              >
              <div class="dropdown-menu dropdown-menu-end">
                <a class="dropdown-item" href="#">Edit</a>
                <a class="dropdown-item" href="#">Delete</a>
              </div>
            </div>
          </div>
          <div class="card-body">
            <ul class="list-unstyled mb-0">
              <li>
                <a
                  class="d-flex align-items-center text-muted text-hover-primary mb-2"
                  href="https://phoenixcoded.net/"
                  target="_blank"
                >
                  <div class="avtar avtar-xs bg-light-secondary flex-shrink-0 me-2">
                    <i class="material-icons-two-tone text-secondary f-16">language</i>
                  </div>
                  <span class="text-truncate w-100">https://phoenixcoded.net/</span>
                </a>
              </li>
              <li>
                <div class="d-flex align-items-center text-muted mb-2">
                  <div class="avtar avtar-xs bg-light-secondary flex-shrink-0 me-2">
                    <i class="material-icons-two-tone text-secondary f-16">home</i>
                  </div>
                  <span class="text-truncate w-100">Hanoi, Vietnam</span>
                </div>
              </li>
              <li>
                <div class="d-flex align-items-center text-muted mb-2">
                  <div class="avtar avtar-xs bg-light-secondary flex-shrink-0 me-2">
                    <i class="material-icons-two-tone text-secondary f-16">calendar_today</i>
                  </div>
                  <span class="text-truncate w-100">Auguest, 21,1996</span>
                </div>
              </li>
              <li>
                <a
                  class="d-flex align-items-center text-muted text-hover-primary mb-0"
                  href="mailto:demo123@mail.com"
                  target="_blank"
                >
                  <div class="avtar avtar-xs bg-light-secondary flex-shrink-0 me-2">
                    <i class="material-icons-two-tone text-secondary f-16">email</i>
                  </div>
                  <span class="text-truncate w-100">demo123@mail.com</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="card">
          <div class="card-header">
            <h5>Who is follow you</h5>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">
              <div class="d-flex align-items-center">
                <div class="flex-shrink-0">
                  <img class="rounded img-fluid wid-40" src="{{ URL::asset('build/images/user/avatar-1.jpg') }}" alt="User image" />
                </div>
                <div class="flex-grow-1 mx-2">
                  <h6 class="mb-0">John Doe</h6>
                  <p class="mb-0">@John_Doe</p>
                </div>
                <div class="flex-shrink-0">
                  <span class="text-muted">5 min ago</span>
                </div>
              </div>
            </li>
            <li class="list-group-item">
              <div class="d-flex align-items-center">
                <div class="flex-shrink-0">
                  <img class="rounded img-fluid wid-40" src="{{ URL::asset('build/images/user/avatar-5.jpg') }}" alt="User image" />
                </div>
                <div class="flex-grow-1 mx-2">
                  <h6 class="mb-0">Addie Bass</h6>
                  <p class="mb-0">@A_Bass</p>
                </div>
                <div class="flex-shrink-0">
                  <span class="text-muted">Yesterday</span>
                </div>
              </div>
            </li>
            <li class="list-group-item">
              <div class="d-flex align-items-center">
                <div class="flex-shrink-0">
                  <img class="rounded img-fluid wid-40" src="{{ URL::asset('build/images/user/avatar-3.jpg') }}" alt="User image" />
                </div>
                <div class="flex-grow-1 mx-2">
                  <h6 class="mb-0">Alberta Robbins</h6>
                  <p class="mb-0">@AlbeRob12</p>
                </div>
                <div class="flex-shrink-0">
                  <span class="text-muted">1 Day ago</span>
                </div>
              </div>
            </li>
            <li class="list-group-item">
              <div class="d-flex align-items-center">
                <div class="flex-shrink-0">
                  <img class="rounded img-fluid wid-40" src="{{ URL::asset('build/images/user/avatar-4.jpg') }}" alt="User image" />
                </div>
                <div class="flex-grow-1 mx-2">
                  <h6 class="mb-0">Agnes McGee</h6>
                  <p class="mb-0">@AgnMcGee</p>
                </div>
                <div class="flex-shrink-0">
                  <span class="text-muted">2 Day ago</span>
                </div>
              </div>
            </li>
          </ul>
        </div>
        <div class="card">
          <div class="card-header">
            <h5>Top Community</h5>
          </div>
          <div class="card-body">
            <div
              class="card border-0 mb-0 shadow-none drp-upgrade-card social-community-card"
              style="background-image: url(../build/images/application/img-community-bg.jpg)"
            >
              <div class="card-body">
                <div id="carousel_event" class="carousel slide">
                  <div class="carousel-indicators mb-0">
                    <button
                      type="button"
                      data-bs-target="#carousel_event"
                      data-bs-slide-to="0"
                      class="active"
                      aria-current="true"
                      aria-label="Slide 1"
                    ></button>
                    <button type="button" data-bs-target="#carousel_event" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carousel_event" data-bs-slide-to="2" aria-label="Slide 3"></button>
                  </div>
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <h6 class="mb-0 mt-4 mt-sm-5 text-white">Engineer's Day Celebration</h6>
                      <p class="mb-2 text-white text-opacity-75">Today at 11pm</p>
                      <div class="user-group">
                        <img src="{{ URL::asset('build/images/user/avatar-1.jpg') }}" alt="user-image" class="avtar" />
                        <img src="{{ URL::asset('build/images/user/avatar-3.jpg') }}" alt="user-image" class="avtar" />
                        <img src="{{ URL::asset('build/images/user/avatar-5.jpg') }}" alt="user-image" class="avtar" />
                        <span class="avtar bg-light-primary text-primary">+20</span>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <h6 class="mb-0 mt-4 mt-sm-5 text-white">New Year Celebration</h6>
                      <p class="mb-2 text-white text-opacity-75">Today at 11pm</p>
                      <div class="user-group">
                        <img src="{{ URL::asset('build/images/user/avatar-2.jpg') }}" alt="user-image" class="avtar" />
                        <img src="{{ URL::asset('build/images/user/avatar-4.jpg') }}" alt="user-image" class="avtar" />
                        <span class="avtar bg-light-primary text-primary">+5</span>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <h6 class="mb-0 mt-4 mt-sm-5 text-white">Engineer's Day Celebration</h6>
                      <p class="mb-2 text-white text-opacity-75">Today at 11pm</p>
                      <div class="user-group">
                        <img src="{{ URL::asset('build/images/user/avatar-3.jpg') }}" alt="user-image" class="avtar" />
                        <img src="{{ URL::asset('build/images/user/avatar-5.jpg') }}" alt="user-image" class="avtar" />
                        <img src="{{ URL::asset('build/images/user/avatar-1.jpg') }}" alt="user-image" class="avtar" />
                        <span class="avtar bg-light-primary text-primary">+16</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header d-flex align-items-center justify-content-between">
            <h5>Gallery</h5>
            <div class="dropdown">
              <a
                class="avtar avtar-xs btn-link-secondary dropdown-toggle arrow-none"
                href="#"
                data-bs-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
                ><i class="material-icons-two-tone f-18">more_vert</i></a
              >
              <div class="dropdown-menu dropdown-menu-end">
                <a class="dropdown-item" href="#">Edit</a>
                <a class="dropdown-item" href="#">Delete</a>
              </div>
            </div>
          </div>
          <div class="card-body">
            <div class="row g-2">
              <div class="col-4">
                <a class="img-post card" data-lightbox="../build/images/application/img-soc-gal-1.jpg">
                  <img src="{{ URL::asset('build/images/application/img-soc-gal-1.jpg') }}" alt="img" class="card-img" />
                  <div class="card-img-overlay">
                    <i class="ti ti-search"></i>
                  </div>
                </a>
              </div>
              <div class="col-4">
                <a class="img-post card" data-lightbox="../build/images/application/img-soc-gal-2.jpg">
                  <img src="{{ URL::asset('build/images/application/img-soc-gal-2.jpg') }}" alt="img" class="card-img" />
                  <div class="card-img-overlay">
                    <i class="ti ti-search"></i>
                  </div>
                </a>
              </div>
              <div class="col-4">
                <a class="img-post card" data-lightbox="../build/images/application/img-soc-gal-3.jpg">
                  <img src="{{ URL::asset('build/images/application/img-soc-gal-3.jpg') }}" alt="img" class="card-img" />
                  <div class="card-img-overlay">
                    <i class="ti ti-search"></i>
                  </div>
                </a>
              </div>
              <div class="col-4">
                <a class="img-post card" data-lightbox="../build/images/application/img-soc-gal-4.jpg">
                  <img src="{{ URL::asset('build/images/application/img-soc-gal-4.jpg') }}" alt="img" class="card-img" />
                  <div class="card-img-overlay">
                    <i class="ti ti-search"></i>
                  </div>
                </a>
              </div>
              <div class="col-4">
                <a class="img-post card" data-lightbox="../build/images/application/img-soc-gal-5.jpg">
                  <img src="{{ URL::asset('build/images/application/img-soc-gal-5.jpg') }}" alt="img" class="card-img" />
                  <div class="card-img-overlay">
                    <i class="ti ti-search"></i>
                  </div>
                </a>
              </div>
              <div class="col-4">
                <a class="img-post card" data-lightbox="../build/images/application/img-soc-gal-6.jpg">
                  <img src="{{ URL::asset('build/images/application/img-soc-gal-6.jpg') }}" alt="img" class="card-img" />
                  <div class="card-img-overlay">
                    <i class="ti ti-search"></i>
                  </div>
                </a>
              </div>
              <div class="col-4">
                <a class="img-post card" data-lightbox="../build/images/application/img-soc-gal-7.jpg">
                  <img src="{{ URL::asset('build/images/application/img-soc-gal-7.jpg') }}" alt="img" class="card-img" />
                  <div class="card-img-overlay">
                    <i class="ti ti-search"></i>
                  </div>
                </a>
              </div>
              <div class="col-4">
                <a class="img-post card" data-lightbox="../build/images/application/img-soc-gal-8.jpg">
                  <img src="{{ URL::asset('build/images/application/img-soc-gal-8.jpg') }}" alt="img" class="card-img" />
                  <div class="card-img-overlay">
                    <i class="ti ti-search"></i>
                  </div>
                </a>
              </div>
              <div class="col-4">
                <a class="img-post card" data-lightbox="../build/images/application/img-soc-gal-9.jpg">
                  <img src="{{ URL::asset('build/images/application/img-soc-gal-9.jpg') }}" alt="img" class="card-img" />
                  <div class="card-img-overlay">
                    <i class="ti ti-search"></i>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header d-flex align-items-center justify-content-between">
            <h5>Create group</h5>
            <div class="dropdown">
              <a
                class="avtar avtar-xs btn-link-secondary dropdown-toggle arrow-none"
                href="#"
                data-bs-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
                ><i class="material-icons-two-tone f-18">more_vert</i></a
              >
              <div class="dropdown-menu dropdown-menu-end">
                <a class="dropdown-item" href="#">Edit</a>
                <a class="dropdown-item" href="#">Delete</a>
              </div>
            </div>
          </div>
          <div class="card-body">
            <div class="px-3 py-4 bg-light-primary soc-create-group text-center rounded">
              <a href="#" class="avtar avtar-s bg-primary rounded-circle text-white"><i class="ti ti-plus f-18"></i></a>
              <h5 class="mt-3 mb-1">Create a Friends Groups</h5>
              <p class="text-primary mb-3"># Friends</p>
              <div class="user-group">
                <img src="{{ URL::asset('build/images/user/avatar-6.jpg') }}" alt="user-image" class="avtar" />
                <img src="{{ URL::asset('build/images/user/avatar-6.jpg') }}" alt="user-image" class="avtar" />
                <img src="{{ URL::asset('build/images/user/avatar-7.jpg') }}" alt="user-image" class="avtar" />
                <img src="{{ URL::asset('build/images/user/avatar-8.jpg') }}" alt="user-image" class="avtar" />
                <span class="avtar rounded-circle bg-light-warning text-warning">+2</span>
              </div>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header d-flex align-items-center justify-content-between">
            <h5>Your page <span class="badge bg-light-secondary rounded-pill">2</span></h5>
            <button class="btn btn-link-primary btn-sm">See All</button>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">
              <div class="d-flex align-items-center">
                <div class="avtar avtar-s bg-light-primary flex-shrink-0 rounded-circle">
                  <i class="ph-duotone ph-paint-brush text-primary"></i>
                </div>
                <div class="flex-grow-1 ms-3">
                  <h5 class="mb-0 f-w-400">UI Design Team</h5>
                </div>
              </div>
            </li>
            <li class="list-group-item">
              <div class="d-flex align-items-center">
                <div class="avtar avtar-s bg-light-warning flex-shrink-0 rounded-circle">
                  <i class="ph-duotone ph-handshake text-warning"></i>
                </div>
                <div class="flex-grow-1 ms-3">
                  <h5 class="mb-0 f-w-400">Creative Team</h5>
                </div>
              </div>
            </li>
            <li class="list-group-item">
              <div class="d-flex align-items-center">
                <div class="avtar avtar-s bg-light-warning flex-shrink-0 rounded-circle">
                  <i class="ph-duotone ph-buildings text-success"></i>
                </div>
                <div class="flex-grow-1 ms-3">
                  <h5 class="mb-0 f-w-400">Marketing</h5>
                </div>
              </div>
            </li>
            <li class="list-group-item">
              <div class="d-flex align-items-center">
                <div class="avtar avtar-s bg-light-warning flex-shrink-0 rounded-circle">
                  <i class="ph-duotone ph-globe text-danger"></i>
                </div>
                <div class="flex-grow-1 ms-3">
                  <h5 class="mb-0 f-w-400">SEO Optimized</h5>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- [ sample-page ] end -->
</div>
<!-- [ Main Content ] end -->

<div class="modal fade modal-lightbox post-modal-lightbox" id="lightboxModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      <div class="modal-body">
        <img src="{{ URL::asset('build/images/user/avatar-5.jpg') }}" alt="images" class="modal-image w-100 img-fluid" />
      </div>
    </div>
  </div>
</div>
@endsection

@section('scripts')

<!-- [Page Specific JS] start -->
<script>
  var lightboxModal = new bootstrap.Modal(document.getElementById('lightboxModal'));
  var elem = document.querySelectorAll('[data-lightbox]');
  for (var j = 0; j < elem.length; j++) {
    elem[j].addEventListener('click', function() {
      var images_path = event.target;
      if (images_path.tagName == 'DIV') {
        images_path = images_path.parentNode;
      }
      if (images_path.tagName == 'I') {
        images_path = images_path.parentNode.parentNode;
      }
      var recipient = images_path.getAttribute('data-lightbox');
      var image = document.querySelector('.modal-image');
      image.setAttribute('src', recipient);
      lightboxModal.show();
    });
  }

  function removeClassByPrefix(node, prefix) {
    for (let i = 0; i < node.classList.length; i++) {
      let value = node.classList[i];
      if (value.startsWith(prefix)) {
        node.classList.remove(value);
      }
    }
  }
</script>
<!-- [Page Specific JS] end -->
@endsection
