<div>

	<form wire:submit.prevent="submitForm" wire:loading.attr="disabled" class="contact-form" method="post">

		@csrf

		<div>
			<label for="name">{{__('lang.sentence61')}}</label>
			<input type="text" id="name" name="yourName" value="{{ old('yourName') }}" required autocomplete="yourName" wire:model.debounce.500ms="yourName">
			<!-- autofocus 属性はお好みで -->

			@error('yourName')
			<p class="alert">
				<strong>{{ $message }}</strong>
			</p>
			@enderror
		</div>

		<div>
			<label for="tel">{{__('lang.sentence62')}}</label>
			<input type="text" id="tel" name="yourTel" value="{{ old('yourTel') }}" required autocomplete="yourTel" wire:model.debounce.500ms="yourTel">

			@error('yourTel')
			<p class="alert">
				<strong>{{ $message }}</strong>
			</p>
			@enderror
		</div>

		<div>
			<label for="email">{{__('lang.sentence63')}}</label>
			<input type="email" id="email" name="yourEmail" value="{{ old('yourEmail') }}" required autocomplete="yourEmail" wire:model.debounce.500ms="yourEmail">

			@error('yourEmail')
			<p class="alert">
				<strong>{{ $message }}</strong>
			</p>
			@enderror
		</div>

		<div class="select-box">
			<label for="select">{{__('lang.sentence64')}}</label>
			<select id="select" name="titleSelect" wire:model="titleSelect" required>
				<option value="">{{__('lang.sentence65')}}</option>
				<option value="{{__('lang.sentence66')}}">{{__('lang.sentence66')}}</option>
				<option value="{{__('lang.sentence67')}}">{{__('lang.sentence67')}}</option>
			</select>

			@error('titleSelect')
			<p class="alert">
				<strong>{{ $message }}</strong>
			</p>
			@enderror
		</div>

		<div class="message-box">
			<label for="message" class="message">{{__('lang.sentence69')}}</label>
			<textarea name="yourMessage" id="message" cols="60" rows="4" value="{{ old('yourMessage') }}" required autocomplete="yourMessage" wire:model="yourMessage"></textarea>

			@error('yourMessage')
			<p class="alert">
				<strong>{{ $message }}</strong>
			</p>
			@enderror
		</div>

		<div class="confirm-box">
			<button type="button" id="confirm" class="confirm" wire:click.prevent="confirm"><span>{{__('lang.sentence70')}}</span></button>
		</div>

		<!-- 確認用モーダル -->
		@if($showModal)
		<div id="overflow" class="overflow">
			<div class="conf">
				<div class="conf_inner">
					<p style="font-size: 1.6rem; text-align:center; margin-bottom:20px;">{{__('lang.sentence73')}}</p>
					<p style="font-size: 1.6rem;">{{__('lang.sentence61')}}</p>
					<p style="font-size: 1.6rem; margin-bottom :10px;">{{$yourName}}</p>
					<p style="font-size: 1.6rem;">{{__('lang.sentence62')}}</p>
					<p style="font-size: 1.6rem; margin-bottom :10px;">{{$yourTel}}</p>
					<p style="font-size: 1.6rem;">{{__('lang.sentence63')}}</p>
					<p style="font-size: 1.6rem; margin-bottom :10px;">{{$yourEmail}}</p>
					<p style="font-size: 1.6rem;">{{__('lang.sentence64')}}</p>
					<p style="font-size: 1.6rem; margin-bottom :10px;">{{$titleSelect}}</p>
					<p style="font-size: 1.6rem;">{{__('lang.sentence69')}}</p>
					<p style="font-size: 1.6rem; margin-bottom :10px;">{!!nl2br(htmlspecialchars($yourMessage))!!}</p>

					<div class="sending">
						<p><span wire:loading.delay>{{__('lang.sentence74')}}</span></p>
					</div>

					<div class="btns">

						<div wire:loading.delay.remove>
							<button type="submit" wire:click.prevent="closeModal">
								<span>{{__('lang.sentence71')}}</span>
							</button>
						</div>
						<div wire:loading.delay>
							<button style="opacity: 0.5; pointer-events:none" type="submit" wire:click.prevent="closeModal" wire:loading.attr="disabled">
								<span>{{__('lang.sentence71')}}</span>
							</button>
						</div>

						<div wire:loading.delay.remove>
							<button type="submit" wire:target="submitForm" class="submit">{{__('lang.sentence72')}}</button>
						</div>
						<div wire:loading.delay>
							<button style="opacity: 0.5; pointer-events:none" type="submit" wire:target="submitForm" wire:loading.attr="disabled" class="submit">{{__('lang.sentence72')}}</button>
						</div>

					</div>
				</div>
			</div>
		</div>
		@endif

		@if(session('success_message'))
		<div id="overflow" class="overflow">
			<div class="conf">
				<div class="conf_inner">
					<p class="alert-success" style="position:relative; text-align: center; color:#333; padding-bottom:30px">{{session('success_message')}}</p>
					<button style="left:50%; transform:translateX(-50%)" type="button" onclick="window.location.reload(true);">
						<span>{{__('lang.sentence71')}}</span>
					</button>
				</div>
			</div>
		</div>
		@endif

	</form>
</div>
