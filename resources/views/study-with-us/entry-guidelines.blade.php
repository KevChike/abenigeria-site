@extends('layouts.master')

@section('page_title')
<title>Entry Guidelines | {{ config('app.name') }}</title>
@endsection

@section('page_description')
<meta name="description" content="">
@endsection

@section('content')  

	<section id="main-container" class="main-container">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<section id="block-menu-block-3" class="block block-menu-block clearfix">
						<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
							<div class="content-inner-page">	
								<h1 class="title-border-left">Entry Guidelines</h1>
								<div class="field-items">
									<div class="field-item even" property="content:encoded">
										<br/>
										<p>
											ABE does not issue formal entry requirements, these guidelines are designed to help you guage which ABE qualification to start with in order to successfully complete the programme.  Your study centre will provide guidance and help you assess this.  The centre will recommend the best level for you to start and will ensure that you have a reasonable expectation of successfully completing the programme and, if you wish, moving on to the next Level.
										</p>
										<h5>Level 2 & Level 3 </h5>
										<p>
											For level 3 we recommend that you have completed formal school education and hold qualifications at Level 2.  A reasonable standard of English will be needed.
										</p>
										<p>
											<u>English Language Proficiency (for non-native English speakers) at Level 2 & 3</u>
										</p>
										<p>
											To be successful it is critical that you have appropriate English Language skills (reading, writing, speaking and listening).  ABE recommends the following standards are met:
										</p>
										<ul>
											<li>IELTS – 5.5</li>
											<li>Cambridge ESOL – Preliminary PET or BEC</li>
											<li>Pearson Test of English (PTE) – 36 - 41</li>
											<li>Common European Framework of Reference (CEFR) – B2</li>
										</ul>
										<p>
											If you do not hold an English qualification your study centre can use other English language tests as a measure of your English skills, but it must be satisfied that the score is equivalent to those recommended above. 
										</p>
										<h5>Level 4</h5>
										<p>
											This level is at the equivalent of year one of a Bachelors degree.  Your centre will look at your previous experience and qualifications to ensure you have a reasonable expectation of success.
										</p>
										<p>
											<u>English Language Proficiency (for non-native English speakers) at Level 4:</u>
										</p>
										<p>
											To be successful it is critical that you have appropriate English Language skills (reading, writing, speaking and listening).  ABE recommends the following standards are met:
										</p>
										<ul>
											<li>IELTS – 5.5 </li>
											<li>Cambridge ESOL – Cambridge English First</li>
											<li>Pearson Test of English Academic (PTE Academic) – 51</li>
											<li>Common European Framework of Reference (CEFR) – B2 </li>
										</ul>
										<p>
											If you do not hold an English qualification your study centre can use other English language tests as a measure of your English skills, but it must be satisfied that the score is equivalent to those recommended above.  
										</p>
										<h5>Level 5</h5>
										<p>
											This level is at the equivalent of the second year of a Bachelors degree.  In order to start at this level your centre will look at your previous experience and qualifications to ensure you have a reasonable expectation of success
										</p>
										<p>
											<u>English Language Proficiency (for non-native English speakers) at Level 5:</u>
										</p>
										<p>
											To be successful it is critical that you have appropriate English Language skills (reading, writing, speaking and listening).  ABE recommends the following standards are met:
										</p>
										<ul>
											<li>IELTS – 6 </li>
											<li>Cambridge ESOL – Cambridge English Advanced (point score 169 or above) </li>
											<li>Pearson Test of English Academic (PTE Academic) – 56 </li>
											<li>Common European Framework of Reference (CEFR) – B2</li>
										</ul>
										<p>
											If you do not hold an English qualification your study centre can use other English language tests as a measure of your English skills, but it must be satisfied that the score is equivalent to those recommended above.  
										</p>
										<h5>Level 6</h5>
										<p>
											This level is at the equivalent of the final year of a Bachelors degree.  In order to start at this level your centre will look at your previous experience and qualifications to ensure you have a reasonable expectation of success.
										</p>
										<p>
											<u>English Language Proficiency (for non-native English speakers) at Level 6:</u>
										</p>
										<p>
											To be successful it is critical that you have appropriate English Language skills (reading, writing, speaking and listening).  ABE recommends the following standards are met:
										</p>
										<ul>
											<li>IELTS – 6 </li>
											<li>Cambridge ESOL – Cambridge English Advanced (point score 176 or above) </li>
											<li>Pearson Test of English Academic (PTE Academic) – 61 - 67</li>
											<li>Common European Framework of Reference (CEFR) – B2 – C1</li>
										</ul>
										<p>
											If you do not hold an English qualification your study centre can use other English language tests as a measure of your English skills, but it must be satisfied that the score is equivalent to those recommended above. 
										</p>
										<h5>Exemptions</h5>
										<p>
											Exemptions from Level 4, 5 or 6 Diploma subjects may be granted to holders of qualifications of certain other professional bodies, provided that such qualifications have been obtained by external examination. 
										</p>
										<p>
											All applications for exemptions must be supported by acceptable documentary evidence (in English) of the qualification(s) and the grade or standard attained. Any exemptions granted will be confirmed in writing.
										</p>
										<h5>How to apply for an exemption</h5>
										<p>
											<u>Existing ABE students</u>
										</p>
										<p>
											Please complete the exemption form in the Members Area and return it to ABE along with copies of your qualifications, certificates and transcripts.
										</p>
										<p>
											No exemptions will be granted from any units previously failed in the ABE examinations.
										</p>
										<p>
											<u>New students</u>
										</p>
										<p>
											If you wish to find out if there are exemptions available to you before you register, please email us attaching copies of your qualifications. Don't forget your contact details so we can get back to you.
										</p>
										<p>
											If you wish to check your level of entry your local ABE accredited college or centre will be able advise you.   Alternatively, you can email us with scanned copies of your highest qualifications.
										</p>
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 pull-right">
							@include('study-with-us.partials._side-bar')

							@include('layouts.partials._prospectus-siderbar')
						</div>
					</section>
				</div>
			</div>
		</div>
	</section>

	@include('layouts.partials._footer-call-to-action')

@endsection
	