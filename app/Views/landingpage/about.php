<?= $this->extend('main') ?>

<?= $this->section('content') ?>

<section class="section-top bg-blue mb-3">
    <div class="container py-3 py-lg-5">
        <h1 class="event-title text-white font-montserrat">About A2VTP</h1>
    </div>
</section>

<div class="container my-5">
    <divs>
        <h2 class="font-montserrat mb-3" style="font-weight: bold;">History</h2>
        <p>
            On 23 August 2006, during the 13th Consultation held between the ASEAN Economic Ministers and the Ministry of Economy,
            Trade and Industry of Japan (AEM-METI) in Kuala Lumpur, the term 'ERIA (Economic Research Institute for ASEAN and East Asia)'
            made its debut.
        </p>
        <p>
            In this meeting, Mr Toshihiro Nikai, Japan's Minister of Economy, Trade and Industry, proposed to establish a think tank called ERIA,
            aiming to emulate an East Asia version of the Organisation for Economic Co-operation and Development (OECD).
            He committed to contribute more than 10 billion yen over a 10-year period.
            A joint media statement from the consultation later confirmed that the ASEAN Ministers welcomed Japan's proposal and requested further discussions with the ASEAN Secretariat.
        </p>
        <p>
            In response, the then ASEAN Secretary General, Mr Ong Keng Yong, initiated the creation of an ERIA Expert Group chaired by Dr Hadi Soesastro,
            Senior Fellow at the Centre for Strategic and International Studies (CSIS), Indonesia. The Expert Group,
            composed of experts from 16 East Asia Summit (EAS) countries and the ASEAN Secretariat, engaged in intensive discussions on the overall idea of ERIA, including its objectives,
            activities, structure, research themes, and capacity-building programme.
        </p>
        <p>
            At the Second East Asia Summit held on 15 January 2007 in Cebu, Philippines, Mr Shinzo Abe, Prime Minister of Japan, formally proposed to establish ERIA,
            and the EAS Leaders welcomed said proposal. Thereupon, on 1 April 2007, the Expert Group agreed on the Points of Convergence on the Institutional Set-Up of ERIA,
            which defined the objectives, activities, and policy interface of ERIA. Additionally, two test-run research projects were started through collaboration among 16 regional research institutes.
            One was titled 'Developing a Roadmap toward East Asian Economic Integration,' reported to the ASEAN Economic Ministers Meeting in August 2007, and the other was 'Energy Security in East Asia,'
            reported to the East Asia Energy Ministers' Meeting also in August 2007. Based on the results of these projects and the thorough discussions of the Expert Group,
            the formal establishment of ERIA was agreed upon by all the leaders of the East Asia Summit at the Third East Asia Summit in Singapore on 21 November 2007.
        </p>
    </divs>
</div>

<div class="container my-5">
    <div>
        <h2 class="font-montserrat mb-3" style="font-weight: bold;">Teams</h2>
        <div class="row">
            <div class="col-lg-8">
                <div class="logo-container d-flex align-items-center justify-content-lg-end">
                    <div class="logo d-flex align-items-center">
                        <a href="#" class="d-block" aria-label="Home - European Commission">
                            <img src="<?= base_url('assets/images/logo-eria.png') ?>" alt="Logo ERIA" class="img-fluid custom-logo">
                        </a>
                        <div class="description1 ms-3">
                            <a href="https://www.eria.org" target="_blank">ERIA</a> - Research Institute
                            <div>This represents the Economic Research Institute for ASEAN and East Asia.</div>
                        </div>

                    </div>

                    <div class="logo d-flex align-items-center">
                        <a href="#" class="d-block" aria-label="Home - European Commission">
                            <img src="<?= base_url('assets/images/logoui.png') ?>" alt="Logo UI" class="img-fluid custom-logo">
                        </a>
                        <div class="description2 ms-3">
                            <a href="https://www.ui.ac.id" target="_blank">Universitas Indonesia</a> - Research Partner
                            <div>This represents the University of Indonesia, a partner institution.</div>
                        </div>
                    </div>

                    <div class="logo d-flex align-items-center">
                        <a href="#" class="d-block" aria-label="Home - European Commission">
                            <img src="<?= base_url('assets/images/LightCodeDigital.jpg') ?>" alt="Logo UI" class="img-fluid custom-logo">
                        </a>
                        <div class="description3 ms-3">
                            <a href="#" target="_blank">Light Code Digital</a> - Web Developer
                            <div>This represents the Light Code Digital, a partner institution.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>