<?php

class JobFunction {
    function __construct($name, $label) {
        $this->name = $name;
        $this->label = $label;
    }
}

class Job {
    function __construct($title, $desc, $functions) {
        $this->title = $title;
        $this->desc = $desc;
        $this->functions = $functions;
        if(!is_array($this->functions)) {
            $this->functions = array($this->functions);
        }
    }

    public function getFunctionsLabel() {
        $str = '';
        foreach($this->functions as $func) {
            $str .= (!empty($str) ? ' ' : '') . $func->label;
        }
        return $str;
    }
}

$FUNCTION_CUSTOMER_SUPPORT = new JobFunction('Customer Support', 'cust');
$FUNCTION_ENGINEERING = new JobFunction('Engineering', 'eng');
$FUNCTION_FINANCE =  new JobFunction('Finance', 'fin');
$FUNCTION_MARKETING =  new JobFunction('Marketing', 'marketing');
$FUNCTION_OPERATIONS = new JobFunction('Operations', 'ops');
$FUNCTION_PROD_DEV = new JobFunction('Product Development', 'pdev');
$FUNCTION_PROD_MANAGEMENT = new JobFunction('Product Management', 'pm');

$functions = array(
    $FUNCTION_CUSTOMER_SUPPORT,
    $FUNCTION_ENGINEERING,
    $FUNCTION_FINANCE,
    $FUNCTION_MARKETING,
    $FUNCTION_OPERATIONS,
    $FUNCTION_PROD_DEV,
    $FUNCTION_PROD_MANAGEMENT
);

$jobs = array(
    new Job(
        'Software Engineer: Core Platform and Applications',
        <<<EOF
<p>
        iJet Onboard is a platform and services company with a passion to transform aviation. We are developing an open computing platform that provides unprecedented access to aircraft data, resulting in substantial improvements in airline operational efficiency.</p>
     <p>
		iJet's Engineering team has multiple open roles for Software Engineers, focusing on development of core Platform capabilities and associated applications. iJet offers qualified engineers the ability to work on interesting challenges for the aerospace industry, all in an energetic startup environment. Whether your interest is mobile messaging, Big Data, web application development, geospatial analysis, or DevOps, we'd like to hear from you.</p>
	<p>
		We are looking for passionate and experienced Engineers who can help design and build innovative data-centric solutions for airplanes and airlines. Our ideal team member has a strong Computer Science background, loves to solve complex problems in software, and collaborates enthusiastically with colleagues. The odds are good that your software will fly &#8212; literally.
     </p>
     <h4>Qualifications and Requirements</h4>
     <ul>
        <li>Excellent Java software engineering skills, including strong experience with Spring and
Hibernate frameworks</li>
		<li> Skills in Groovy and/or Python are a substantial benefit</li>
		<li> A broad range of experience in modern software development, patterns, and
technologies. Some areas that are particularly relevant to iJet include web services (especially RESTful interactions), asynchronous messaging (JMS and AMQP), relational and schema-free data management and analytics (experience with Map/Reduce frameworks a plus), and infrastructure automation.</li>
		<li> Web development skills are beneficial, including experience developing modern, data- driven websites with HTML/XHTML and CSS, JavaScript (especially jQuery), asynchronous / Ajax patterns, and database integration.</li>
		<li> Ability to incorporate a variety of COTS and open source software tools to quickly develop powerful, highly reliable solutions</li>
		<li> Experience with software-build and continuous integration tools (Hudson/Jenkins, Maven, Ant, or others)</li>
		<li> Degree or equivalent experience in Electrical Engineering or Computer Science is preferred</li>
     </ul>
EOF
,
        $FUNCTION_ENGINEERING
    ),
    new Job(
        'Software Engineer: Web Development',
        <<<EOF
<p>
        iJet Onboard is a platform and services company with a passion to transform aviation. We are developing an open computing platform that provides unprecedented access to aircraft data, resulting in substantial improvements in airline operational efficiency.</p>
     <p>
		iJet's Engineering team has multiple open roles for Software Engineers, focusing on development of core Platform capabilities and associated applications. iJet offers qualified engineers the ability to work on interesting challenges for the aerospace industry, all in an energetic startup environment. Whether your interest is mobile messaging, Big Data, web application development, geospatial analysis, or DevOps, we'd like to hear from you.</p>
	<p>
		We are looking for passionate and experienced Engineers who can help design and build innovative data-centric solutions for airplanes and airlines. Our ideal team member has a strong Computer Science background, loves to solve complex problems in software, and collaborates enthusiastically with colleagues. The odds are good that your software will fly – literally.
     </p>

     <h4>Qualifications and Requirements</h4>
     <ul>
        <li> Excellent Java software engineering skills, including strong experience with Spring and
Hibernate frameworks</li>
		<li> Skills in Groovy and/or Python are a substantial benefit</li>
		<li> A broad range of experience in modern software development, patterns, and
technologies. Some areas that are particularly relevant to iJet include web services (especially RESTful interactions), asynchronous messaging (JMS and AMQP), relational and schema-free data management and analytics (experience with Map/Reduce frameworks a plus), and infrastructure automation.</li>
		<li> Web development skills are beneficial, including experience developing modern, data- driven websites with HTML/XHTML and CSS, JavaScript (especially jQuery), asynchronous / Ajax patterns, and database integration.</li>
		<li> Ability to incorporate a variety of COTS and open source software tools to quickly develop powerful, highly reliable solutions</li>
		<li> Experience with software-build and continuous integration tools (Hudson/Jenkins, Maven, Ant, or others)</li>
		<li> Degree or equivalent experience in Electrical Engineering or Computer Science is preferred</li>
     </ul>
EOF
,
        $FUNCTION_ENGINEERING
    ),
    new Job(
        'Software Test Engineer',
        <<<EOF
<p>
            iJet Technologies, Inc. is executing upon a global strategy to successfully deliver world-class applications and connectivity solutions to the aviation industry.
         </p>
         <p>
            This position is for a software test engineer to test applications and aviation software within a highly adaptable physical and virtual environment comprised of specialized communication, aviation, and
computing systems, supporting iJet System product development and simulations.
         </p>
         <h4>Primary Responsibilities and Expectations</h4>
         <ul>
            <li>Provide automation of regression testing across all benches, products and teams.</li>
			<li> Provide automated test suites using your deep knowledge of the automated test marketplace to
choose, define and implement the most efficient means to ensure product quality.</li>
			<li> Develop data generation mechanisms and processes for managing test cases, data, and results.</li>
			<li> Leverage your ability to work in a dynamic environment where requirements may be incomplete or
vague to help validate and baseline system functionality</li>
			<li> Perform release activities in coordination with Project Management, QA, Release Management and
Development teams in a timely and efficient manner, to ensure smooth repeatable releases.</li>
			<li> Support multiple concurrent releases through various test environments.</li>
			<li> Troubleshoot complex problems, release issues and environment issues in a multi-component
environment.</li>
			<li> Write clear, concise and reproducible defects.</li>
			<li> Manage and report on the status of in-flight projects in terms of risk, test completion, and test
failure metrics in a manner consumable by all levels of the organization.</li>

         </ul>
         <h4>Qualifications and Requirements</h4>
         <ul>
            <li>BA/BS Degree preferred or equivalent work experience.</li>
			<li> 5+ years in a LAMP Application Test Engineering role.</li>
			<li> Solid understanding and practical experience of Agile SDLC.</li>
			<li> 2+ years' experience with automated test tools such as Selenium.</li>
			<li> Prior experience with regulated software development, particularly aerospace development a strong
plus.</li>
         </ul>
EOF
        ,
        $FUNCTION_ENGINEERING
    ),
    new Job(
        'Applications Architect',
        <<<EOF
<p>
        iJet Onboard is a platform and services company with a passion to transform aviation. We are developing an open computing platform and a set of associated applications that provide unprecedented access to aircraft data and substantial improvements in airline operational efficiency.</p>
     <p>
		iJet is seeking an experienced Application Architect to focus on software design and implementation of new applications for iJet's Platform. The right candidate will be an exceptional Java software developer with an established track-record designing complex software applications and leading development teams through successful delivery. Our ideal team member has a strong Computer Science background, loves to solve challenging problems with software, and collaborates enthusiastically with colleagues. The Application Architect has substantial expertise in Java, MVC development patterns (Groovy/Grails preferred), web services (SOAP and REST), asynchronous messaging, and data management (relational and non- relational). A background in airline operations would be beneficial, but is not required.</p>

     <h4>Responsibilities and Expectations</h4>
     <ul>
        <li>Apply a consulting mindset and strong communication skills to act as the bridge between iJet's Engineering and Product teams</li>
		<li>Lead the architecture and design of new operational applications that integrate with iJet's Platform</li>
		<li>Identify application requirements, identify risks and challenges, and estimate implementation time/cost</li>
		<li>Clearly and effectively document the architecture and design, lead review sessions, and communicate the design to other engineering and product teams</li>
		<li>Act as development lead on one or more application development teams</li>
		<li>Develop reference applications to help airlines and other third-parties understand and
integrate with the iJet platform; communicate with iJet customers and partners as may
be necessary to ensure success of their iJet-related development efforts</li>
		<li>Collaborate on architecture and design for other aspects of iJet's Platform</li>
     </ul>
     <h4>Qualifications and Requirements</h4>
     <ul>
        <li>5+ years in a Software Architecture / Software Design Engineer role, with strong experience in Java web application design and development
		</li><li>Strong experience with SOA / Web Services patterns and technologies
		</li><li>Strong experience with modern UI development
		</li><li>Exceptional written and verbal communications skills, and demonstrated ability to
make, explain, and document architectures and architectural design decisions
		</li><li>10+ years of relevant experience and Bachelor's degree in Electrical Engineering or
Computer Science is preferred</li>
		     </ul>
EOF
        ,
        array( $FUNCTION_ENGINEERING, $FUNCTION_PROD_DEV )
    ),
    new Job(
        'Data Management Architect',
        <<<EOF
 <p>
        iJet Technologies, Inc. is executing upon a global strategy to successfully deliver world-class applications and connectivity solutions to the aviation industry.</p>
     <p>
		The Data Management Architect is a strategic role in iJet's Engineering group. This role is responsible for the architecture and design of iJet's airborne and terrestrial data management functions and solutions. Data management is a crucial element of iJet's overall solution and, as such, we are looking for candidates with substantial expertise in the discipline. The right candidates will think critically about iJet's distributed and localized data management needs, work iteratively to define a strong, documented architecture, apply various architectural lenses to analyze the relative 'goodness' of proposed
solutions, and make critical, long-term architectural decisions. The Data Management Architect will also be responsible for establishing and managing the set of architectural standards for data management tools, technologies, and patterns, and will oversee the implementation of data-management capabilities throughout iJet's Engineering group. </p>

  <h4>Responsibilities and Expectations</h4>
     <ul>
        <li>Principal data management architect, responsible for architecture and design of iJet's airborne and terrestrial data management functions, plus leadership of iJet's data modeling efforts and data systems implementation</li>
        <li>Perform any analysis and trade studies necessary to create the architecture(s)</li>
        <li>Clearly and effectively document the data architecture and design, lead review sessions, and
communicate the design to other engineering and product teams</li>
		<li>Lead the information and data architecture across product and engineering teams</li>
        <li>Assist the prototyping and validation teams in developing realistic tests and scenarios, to model
various functional components, exercise advanced concepts, evaluate preliminary designs, and
detect potential faults and incompatibilities</li>
		<li>Apply a consultative mindset and strong communication skills to work directly with engineering
and product teams, assisting in requirements gathering</li>
		<li>Adopt new technologies and patterns to effectively guide both non-relational and relational
data solutions</li>
     </ul>
     <h4>Qualifications and Requirements</h4>
     <ul>
		<li>Understanding and experience across the disciplines of Data Management</li>
        <li>Extensive experience designing and implementing large-scale, distributed data-management
solutions</li>
<li>Expert knowledge of relational and non-relational data management patterns, including extensive data modeling experience</li>
<li>Strong understanding of traditional and emerging patterns in data analytics and reporting</li>
<li>Demonstrated ability to make, explain, and document architectural design decisions</li>
<li>Superb written and verbal communications ability</li>
<li>Respect for formal requirements-management processes</li>
<li>Proficient with tools, systems, processes, and procedures relevant to the discipline</li>
<li>Masters Degree or equivalent work experience in Computer Science or Electrical Engineering</li>
<li>Desire to work on a small, fast-moving team</li>
<li>Remarkable references</li>
		     </ul>
EOF
        ,
        $FUNCTION_ENGINEERING
    ),
    new Job(
        'Senior Information Security Engineer',
        <<<EOF
<p>
        iJet is a platform and services company with a passion to transform aviation. We are developing an open computing platform that provides unprecedented access to aircraft data, resulting in substantial improvements in airline operational efficiency. iJet offers qualified engineers the ability to work on interesting challenges for the aerospace industry, all in an energetic startup environment. We are looking for passionate and experienced Engineers who can help design and build innovative data-centric solutions for airplanes and airlines.</p>
     <p>
		iJet Onboard is seeking an experienced Information Security Engineer to guide the design and development of security solutions for iJet's Platform. This role is primarily a technical engineering role, responsible for design, implementation, and documentation of complex, security-focused solutions and services for iJet's Platform.</p>

        <h4>Qualifications and Requirements</h4>
     <ul>
        <li>Minimum 5 years of experience working in an Information Security discipline</li>
		<li>Substantial experience with IP network design, implementation, and security</li>
		<li>Substantial experience with Identity and Access Management (IAM) and Public-Key Infrastructure (PKI), including demonstrated understanding of concepts, protocols, and off-the-shelf tools</li>
		<li>Substantial security experience with web services and, ideally, with asynchronous messaging</li>
		<li>Strong understanding of mobile and distributed-computing architectures and the evolving challenges (and solutions) for securing such systems</li>
		<li>Ability to balance technical, procedural, and fiscal considerations when designing solutions</li>
		<li>Experience developing and interpreting security policies and procedures</li>
		<li>Exceptional written and verbal communication skills</li>
		<li>Willingness to mentor junior members of the team</li>
		<li>Degree or equivalent experience in Electrical Engineering or Computer Science is preferred</li>
		     </ul>
EOF
        ,
        $FUNCTION_ENGINEERING
    ),
    new Job(
        'Vice President of Operations',
        <<<EOF
<p>
    iJet Technologies, Inc. is executing upon a global strategy to successfully deliver a Platform-as-a-Service (PaaS) including world-class applications and  data services to the aviation industry.  </p>

<p>In this newly created role, the VP of Operations will build and lead the team focused on global operational delivery of iJet Platform-as-a-Service. The Operations team will be responsible for: deploying and operating iJet's production and pre-production technology infrastructure; defining and enforcing information security policy; installation and maintenance of aircraft-deployed components; supply chain management; customer account management, including billing; customer training; and customer support.  </p>

<p>A successful candidate for this position will have a track record with start-up organizations of developing and scaling service-delivery organizations, achieving operational effectiveness, operating across geographies and working closely with other business and policy leaders. The service-operations aspects of this organization will scale across the globe, with expectations to satisfy high-uptime service agreements. Budget forecasting, cost management and vendor management are also critical aspects of this group with operating budgets growing into many millions of dollars.</p>

<p>This position will be based in iJet's Seattle headquarters and will report directly to the CEO.
</p>

     <h4>Responsibilities and Expectations</h4>
<i>Technical Operations</i>
<ul>
  <li>Design, deploy, and operate iJet's Production and Pre-production technology infrastructure, including systems and network components</li>
<li>Ensure that iJet's Platform-as-a-Service provides exceptional reliability and performance for our customers</li>
<li>Select and manage vendors as necessary to support operations and service delivery</li>
<li>Provide strategic thought leadership around release, operations, and infrastructure as well as the applicable processes and standards</li>
<li>Establish policies and procedures that help drive reliability and customer trust</li>
<li>Promote emerging technologies and approaches for improved product operations and infrastructure capabilities as appropriate for iJet's businesses</li>
<li>Track and develop compliance and security standards to satisfy existing and emerging requirements in the aviation industry</li>
<li>Manage health and status of iJet's Platform-as-a-Service</li>
</ul>

<i>Installation and Maintenance</i>
<ul>
  <li>Manage the manufacturing/assembly process for the hardware components of iJet's Platform-as-a-Service, including development and maintenance of iJet's manufacturing procedures in accordance with FAA standards and airline operational policies</li>
<li>Work with airlines to schedule and execute installations</li>
<li>Develop and maintain efficient installation procedures</li>
<li>Manage the supply chain to meet delivery targets</li>
<li>Manage global maintenance and repair operations, including: hardware and software components of the iJet Platform</li>
</ul>

<i>Customer Support</i>
<ul>
  <li>Develop an organization and associated processes and policies to support iJet's global customer base, including fielding all customer issues related to system function and service delivery</li>
<li>Define and manage escalation processes and incident management systems for efficiently reacting to customer issues</li>
<li>Develop curriculum and deliver training for iJet's airline customer and application partners</li>
</ul>

<i>Supply Chain</i>
<ul>
  <li>Develop and manage a procurement function within iJet, to ensure consistent quality, pricing, and inventory management</li>
<li>Provision new customer accounts in iJet's system to enable accurate billing and proper system function</li>
<li>Provision and configure technology infrastructure and accounts to support iJet's airline customers and application partners</li>
<li>Develop reports to support iJet's Finance team with regular customer billing activities </li>
     </ul>

  <h4>Qualifications and Requirements</h4>
     <ul>
       <li>MA/MS and BA/BS in Computer Science, Electrical Engineering, or technical field strongly preferred</li>
<li>Experience with delivering good and/or services to commercial airlines is a plus</li>
<li>10+ years of work experience in delivering software platforms, ideally in global management and operations role for PaaS preferably in a start-up environment</li>
<li>Solid history of managing (budgeting, forecasting, tracking variance, etc.) budgets</li>
<li>Proven track record in a start-up environment of developing, deploying and maintaining a successful operations and PaaS delivery organization </li>
<li>Understanding and experience across the disciplines of Operations </li>
<li>Experience in recruiting, hiring, and training diverse personnel focusing on high performance and professional development</li>
<li>Ability to balance short term tactical decisions with long term strategic thinking</li>
<li>Demonstrable experience in providing leadership in changing, ambiguous and challenging situations</li>
<li>Ability to deal with a broad range of situations from long-term strategic thinking to high-priority escalations, while maintaining an objective viewpoint</li>
<li>Clear presentation, written, verbal, and interpersonal communication skills</li>
<li>Solid understanding of technical issues and opportunities related to modern technology infrastructure and operations</li>
<li>Experience interacting and collaborating across all levels of the organization, customers, and external contacts with a professional demeanor and diplomacy</li>
<li>Superb written and verbal communications ability Desire to work on a small, fast-moving team</li>
<li>Remarkable references</li>

		     </ul>
EOF
        ,
        $FUNCTION_OPERATIONS
    ),
    new Job(
        'Project Manager',
        <<<EOF
<p>
        iJet Technologies, Inc. is executing upon a global strategy to successfully deliver world-class applications and connectivity solutions to the aviation industry.
     </p>
     <p>
        The successful applicant for the project manager position will act as the project and business conduit for communication between iJet and software development suppliers or partners responsible for delivering key system components. The project manager will work closely with the project engineer, the project team and company leadership to ensure the project aspects of the supplier contract are met in a timely manner.
     </p>
     <h4>Primary Responsibilities and Expectations</h4>
     <ul>
        <li>Develop Project Plans, including budgets, schedules and risk assessment.</li>
		<li>Monitor the project performance of suppliers / partners.</li>
		<li>Present supplier / partner project performance and project status to the iJet team.</li>
		<li>Advise the iJet technical team and company leadership about project matters with the
supplier / partner.</li>
		<li>Provide input to the legal department to successfully write and execute a contract.</li>
		<li>Participate in the development of SOW and WBS within iJet and with suppliers / partners.</li>
		<li>Ensure suppliers / partners are working under the guidelines of the contract.</li>
		<li>Make recommendations when project issues may affect the scope of the project or
change the nature of the contract.</li>
		<li>Evaluate and negotiate requirements changes between iJet and the supplier / partner.</li>
		<li>Participating in supplier:</li>
           <ul class="secondaryListItem">
              <li>Selection</li>
              <li>Technical evaluation</li>
              <li>Product definition</li>
              <li>Product integration </li>
              <li>Product qualification </li>
              <li>Product introduction</li>
           </ul>

     </ul>
     <h4>Qualifications and Requirements</h4>
     <ul>
        <li>Minimum 5 years of experience in the aerospace or other regulated industry. Highly desirable to have Aerospace and Software Development experience.</li>
		<li>Demonstrated Project Management Skills: Schedule Tracking, Task Management, Risk Management, Etc...</li>
		<li>Clear, precise verbal and presentation skills</li>
		<li>Proven experience working in the customer / supplier environment</li>
		<li>Familiarity with Agile Software Development tools and processes</li>
		<li>Demonstrated skills using PMBOK processes and procedures.</li>
		<li>Background in in Electrical Engineering, Computer Science or System Engineering is
preferred</li>
		<li>Proficient with Microsoft Office tools</li>
     </ul>
EOF
        ,
        $FUNCTION_PROD_MANAGEMENT
    )
);
