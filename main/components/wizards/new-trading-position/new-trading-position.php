<!--begin::Modal - New Target-->
<div class="modal fade" id="kt_modal_new_trading_position" tabindex="-1" aria-hidden="true">
	<!--begin::Modal dialog-->
	<div class="modal-dialog modal-dialog-centered mw-650px">
		<!--begin::Modal content-->
		<div class="modal-content rounded">
			<!--begin::Modal header-->
			<div class="modal-header pb-0 border-0 justify-content-end">
				<!--begin::Close-->
				<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
					<i class="ki-outline ki-cross fs-1"></i>
				</div>
				<!--end::Close-->
			</div>
			<!--begin::Modal header-->
			<!--begin::Modal body-->
			<div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
				<!--begin:Form-->
				<form id="kt_modal_new_trading_position_form" class="form" method="post" action="new-position.php">
					<!--begin::Heading-->
					<div class="mb-13 text-center">
						<!--begin::Title-->
						<h1 class="mb-3">Add new Position</h1>
						<!--end::Title-->
					</div>
					<!--end::Heading-->
					<!--begin::Input group-->
					<div class="fv-row mb-7">
						<!--begin::Label-->
						<label class="required fs-6 fw-semibold form-label mb-2">Currency Pair</label>
						<!--end::Label-->
						<!--begin::Input-->
						<select class="form-select form-select-solid fw-bold" name="position_currency_pair" data-control="select2" data-dropdown-parent="#kt_modal_new_trading_position" data-placeholder="Select a currency pair">
							<option></option>
							<?php
							$currencyPairResult = $dbConnection->query("SELECT * FROM investments_supported_pairs ORDER BY currencyPair ASC");
							while ($currencyPairRow = $currencyPairResult->fetch_assoc()) {
								$currencyPair = $currencyPairRow['currencyPair'];
								echo <<<END
                                    <option value="$currencyPair">$currencyPair</option>
                                END;
							}

							?>
						</select>
						<!--end::Input-->
					</div>
					<!--end::Input group-->
					<!--begin::Input group-->
					<div class="row g-9 mb-8">
						<!--begin::Col-->
						<div class="col-md-6 fv-row">
							<label class="required fs-6 fw-semibold mb-2">State</label>
							<select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Select a State" name="position_state">
								<option value="">Select State...</option>
								<option value="TP">Take Profit</option>
								<option value="SL">Stop Loss</option>
								<option value="BE">Breakeven</option>
								<option value="OPEN">Still open</option>
								<option value="LIMIT">Open Limit</option>
							</select>
						</div>
						<!--end::Col-->
						<!--begin::Col-->
						<div class="col-md-6 fv-row">
							<label class="required fs-6 fw-semibold mb-2">Date</label>
							<!--begin::Input-->
							<div class="position-relative d-flex align-items-center">
								<!--begin::Icon-->
								<i class="ki-outline ki-calendar-8 fs-2 position-absolute mx-4"></i>
								<!--end::Icon-->
								<!--begin::Datepicker-->
								<input class="form-control form-control-solid ps-12" placeholder="Select a date" name="position_exec_date">
								<!--end::Datepicker-->
							</div>
							<!--end::Input-->
						</div>
						<!--end::Col-->
					</div>
					<!--end::Input group-->
					<!--begin::Input group-->
					<div class="row g-9 mb-8">
						<!--begin::Col-->
						<div class="col-md-6 fv-row">
							<label class="required fs-6 fw-semibold mb-2">Risk Reward Ratio (1:X)</label>
							<input class="form-control form-control-solid" placeholder="1:3" name="position_rr" maxlength="5">
						</div>
						<!--end::Col-->
						<!--begin::Col-->
						<div class="col-md-6 fv-row">
							<label class="required fs-6 fw-semibold mb-2">Profit / Lose (In $)</label>
							<input class="form-control form-control-solid" placeholder="250" name="position_profit" type="number">
						</div>
						<!--end::Col-->
					</div>
					<!--end::Input group-->
					<!--begin::Actions-->
					<div class="text-center">
						<button type="reset" id="kt_modal_new_trading_position_cancel" class="btn btn-light me-3">Cancel</button>
						<button type="submit" id="kt_modal_new_trading_position_submit" class="btn btn-primary">
							<span class="indicator-label">Submit</span>
							<span class="indicator-progress">Please wait...
								<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
						</button>
					</div>
					<!--end::Actions-->
				</form>
				<!--end:Form-->
			</div>
			<!--end::Modal body-->
		</div>
		<!--end::Modal content-->
	</div>
	<!--end::Modal dialog-->
</div>
<!--end::Modal - New Target-->