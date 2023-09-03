<!--begin::Modal - Create Project-->
<div class="modal fade" id="kt_modal_create_project" tabindex="-1" aria-hidden="true">
	<!--begin::Modal dialog-->
	<div class="modal-dialog modal-fullscreen p-9">
		<!--begin::Modal content-->
		<div class="modal-content modal-rounded">
			<!--begin::Modal header-->
			<div class="modal-header">
				<!--begin::Modal title-->
				<h2>Create Project</h2>
				<!--end::Modal title-->
				<!--begin::Close-->
				<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
					<i class="ki-outline ki-cross fs-1"></i>
				</div>
				<!--end::Close-->
			</div>
			<!--end::Modal header-->
			<!--begin::Modal body-->
			<div class="modal-body scroll-y m-5">
				<!--begin::Stepper-->
				<div class="stepper stepper-links d-flex flex-column" id="kt_modal_create_project_stepper">
					<!--begin::Container-->
					<div class="container">
						<!--begin::Nav-->
						<div class="stepper-nav justify-content-center py-2 d-none d-lg-flex">
							<!--begin::Step 1-->
							<div class="stepper-item me-5 me-md-15 current" data-kt-stepper-element="nav">
								<h3 class="stepper-title">Project Type</h3>
							</div>
							<!--end::Step 1-->
							<!--begin::Step 2-->
							<div class="stepper-item me-5 me-md-15" data-kt-stepper-element="nav">
								<h3 class="stepper-title">Project Settings</h3>
							</div>
							<!--end::Step 2-->
							<!--begin::Step 3-->
							<div class="stepper-item me-5 me-md-15" data-kt-stepper-element="nav">
								<h3 class="stepper-title">Set First Target</h3>
							</div>
							<!--end::Step 3-->
						</div>
						<!--end::Nav-->
						<!--begin::Form-->
						<form class="mx-auto w-100 mw-600px pt-lg-15 pb-lg-10" enctype="multipart/form-data" novalidate="novalidate" id="kt_modal_create_project_form" method="post" action="//grindbet.pl/home/projects/new-project.php">
							<!--begin::Type-->
							<div class="current" data-kt-stepper-element="content">
								<!--begin::Wrapper-->
								<div class="w-100">
									<!--begin::Heading-->
									<div class="pb-7 pb-lg-12">
										<!--begin::Title-->
										<h1 class="fw-bold text-dark">Project Type</h1>
										<!--end::Title-->
									</div>
									<!--end::Heading-->
									<!--begin::Input group-->
									<div class="fv-row mb-15" data-kt-buttons="true">
										<!--begin::Option-->
										<label class="btn btn-outline btn-light-primary btn-active-light-primary d-flex text-start p-6 mb-6 active">
											<!--begin::Input-->
											<input class="btn-check" type="radio" checked="checked" name="project_type" value="1" />
											<!--end::Input-->
											<!--begin::Label-->
											<span class="d-flex">
												<!--begin::Icon-->
												<i class="ki-duotone ki-user fs-3hx">
													<i class="path1"></i>
													<i class="path2"></i>
												</i>
												<!--end::Icon-->
												<!--begin::Info-->
												<span class="ms-4 d-flex flex-row align-items-center">
													<span class="fs-3 fw-bold text-gray-900 d-block">Personal Project</span>
												</span>
												<!--end::Info-->
											</span>
											<!--end::Label-->
										</label>
										<!--end::Option-->
										<!--begin::Option-->
										<label class="btn btn-outline btn-outline d-flex text-start p-6 cursor-default" data-bs-toggle="tooltip" title="Coming Soon">
											<!--begin::Input-->
											<input class="btn-check" type="radio" name="project_type" value="1" />
											<!--end::Input-->
											<!--begin::Label-->
											<span class="d-flex">
												<!--begin::Icon-->
												<i class="ki-duotone ki-profile-user fs-3hx">
													<i class="path1"></i>
													<i class="path2"></i>
													<i class="path3"></i>
													<i class="path4"></i>
												</i>
												<!--end::Icon-->
												<!--begin::Info-->
												<span class="ms-4 d-flex flex-row align-items-center">
													<span class="fs-3 fw-bold text-gray-900 d-block">Team Project</span>
												</span>
												<!--end::Info-->
											</span>
											<!--end::Label-->
										</label>
										<!--end::Option-->
									</div>
									<!--end::Input group-->
									<!--begin::Actions-->
									<div class="d-flex justify-content-end">
										<button type="button" class="btn btn-lg btn-primary" data-kt-element="type-next">
											<span class="indicator-label">Project Settings</span>
											<span class="indicator-progress">Please wait...
												<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
										</button>
									</div>
									<!--end::Actions-->
								</div>
								<!--end::Wrapper-->
							</div>
							<!--end::Type-->
							<!--begin::Settings-->
							<div data-kt-stepper-element="content">
								<!--begin::Wrapper-->
								<div class="w-100">
									<!--begin::Heading-->
									<div class="pb-6">
										<!--begin::Title-->
										<h1 class="fw-bold text-dark">Project Settings</h1>
										<!--end::Title-->
									</div>
									<!--end::Heading-->
									<div class="d-flex flex-column align-items-center fv-row mb-8">
										<!--begin::Image input-->
										<div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url(//gadgetforyou.pl/assets/media/icons/duotune/general/gen017.svg)">
											<!--begin::Image preview wrapper-->
											<div class="image-input-wrapper w-125px h-125px" style="background-image: url(//gadgetforyou.pl/assets/media/icons/duotune/general/gen017.svg);"></div>
											<!--end::Image preview wrapper-->

											<!--begin::Edit button-->
											<label class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" data-bs-dismiss="click" title="Change avatar">
												<i class="ki-duotone ki-pencil fs-6"><span class="path1"></span><span class="path2"></span></i>
												<!--begin::Inputs-->
												<input type="file" name="settings_picture" accept=".png, .jpg, .jpeg" />

												<!--end::Inputs-->
											</label>
											<!--end::Edit button-->


											<!--begin::Cancel button-->
											<span class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" data-bs-dismiss="click" title="Cancel avatar">
												<i class="ki-outline ki-cross fs-3"></i>
											</span>
											<!--end::Cancel button-->
										</div>
										<!--end::Image input-->
									</div>
									<!--begin::Input group-->
									<div class="fv-row mb-8 d-none">
										<!--begin::Label-->
										<label class="required fs-6 fw-semibold mb-2">Customer</label>
										<!--end::Label-->
										<!--begin::Input-->
										<select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Select..." name="settings_customer">
											<option selected value=" ">Select...</option>
										</select>
										<!--end::Input-->
									</div>
									<!--end::Input group-->
									<!--begin::Input group-->
									<div class="fv-row mb-8">
										<!--begin::Label-->
										<label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
											<span class="required">Project Name</span>
											<span class="ms-1" data-bs-toggle="tooltip" title="Specify project name">
												<i class="ki-outline ki-information-5 text-gray-500 fs-6"></i>
											</span>
										</label>
										<!--end::Label-->
										<!--begin::Input-->
										<input type="text" class="form-control form-control-solid" placeholder="Enter Project Name" name="settings_name" />
										<!--end::Input-->
									</div>
									<!--end::Input group-->
									<!--begin::Input group-->
									<div class="fv-row mb-8">
										<!--begin::Label-->
										<label class="required fs-6 fw-semibold mb-2">Project Description</label>
										<!--end::Label-->
										<!--begin::Input-->
										<textarea class="form-control form-control-solid" rows="3" maxlength="200" placeholder="Enter Project Description" name="settings_description"></textarea>
										<!--end::Input-->
									</div>
									<!--end::Input group-->
									<!--begin::Input group-->
									<div class="fv-row mb-8">
										<!--begin::Label-->
										<label class="required fs-6 fw-semibold mb-2">Release Date</label>
										<!--end::Label-->
										<!--begin::Wrapper-->
										<div class="position-relative d-flex align-items-center">
											<!--begin::Icon-->
											<i class="ki-outline ki-calendar-8 fs-2 position-absolute mx-4"></i>
											<!--end::Icon-->
											<!--begin::Input-->
											<input class="form-control form-control-solid ps-12" placeholder="Pick date range" name="settings_release_date" />
											<!--end::Input-->
										</div>
										<!--end::Wrapper-->
									</div>
									<!--end::Input group-->
									<!--begin::Actions-->
									<div class="d-flex flex-stack">
										<button type="button" class="btn btn-lg btn-light me-3" data-kt-element="settings-previous">Project Type</button>
										<button type="button" class="btn btn-lg btn-primary" data-kt-element="settings-next">
											<span class="indicator-label">Set First Target</span>
											<span class="indicator-progress">Please wait...
												<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
										</button>
									</div>
									<!--end::Actions-->
								</div>
								<!--end::Wrapper-->
							</div>
							<!--end::Settings-->
							<!--begin::Targets-->
							<div data-kt-stepper-element="content">
								<!--begin::Wrapper-->
								<div class="w-100">
									<!--begin::Heading-->
									<div class="pb-6">
										<!--begin::Title-->
										<h1 class="fw-bold text-dark">Set First Target</h1>
										<!--end::Title-->
									</div>
									<!--end::Heading-->
									<!--begin::Input group-->
									<div class="fv-row mb-8">
										<label class="fs-6 fw-semibold mb-2">Target Title</label>
										<input type="text" class="form-control form-control-solid" placeholder="Enter Target Title" name="target_title" />
									</div>
									<!--end::Input group-->
									<!--begin::Input group-->
									<div class="row g-9 mb-8">
										<!--begin::Col-->
										<div class="col-12 fv-row">
											<label class="required fs-6 fw-semibold mb-2">Due Date</label>
											<div class="position-relative d-flex align-items-center">
												<!--begin::Icon-->
												<i class="ki-outline ki-calendar-8 fs-2 position-absolute mx-4"></i>
												<!--end::Icon-->
												<!--begin::Datepicker-->
												<input class="form-control form-control-solid ps-12" placeholder="Pick date range" name="target_due_date" />
												<!--end::Datepicker-->
											</div>
										</div>
										<!--end::Col-->
									</div>
									<!--end::Input group-->
									<!--begin::Input group-->
									<div class="fv-row mb-8">
										<label class="fs-6 fw-semibold mb-2">Target Details</label>
										<textarea class="form-control form-control-solid" rows="2" name="target_details" placeholder="Type Target Details"></textarea>
									</div>
									<!--end::Input group-->
									<!--begin::Input group-->
									<div class="fv-row mb-8">
										<label class="required fs-6 fw-semibold mb-2">Tags</label>
										<input class="form-control form-control-solid" name="target_tags" />
									</div>
									<!--end::Input group-->
									<!--begin::Actions-->
									<div class="d-flex flex-stack">
										<button type="button" class="btn btn-lg btn-light me-3" data-kt-element="targets-previous">Project Settings</button>
										<button type="submit" class="btn btn-lg btn-primary">
											<span class="indicator-label">Complete</span>
										</button>
									</div>
									<!--end::Actions-->
								</div>
								<!--end::Wrapper-->
							</div>
							<!--end::Targets-->
						</form>
						<!--end::Form-->
					</div>
					<!--begin::Container-->
				</div>
				<!--end::Stepper-->
			</div>
			<!--end::Modal body-->
		</div>
		<!--end::Modal content-->
	</div>
	<!--end::Modal dialog-->
</div>
<!--end::Modal - Create Project-->