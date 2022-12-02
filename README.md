# Entrega 3
## IIC2413 - Bases de Datos

### Equipo
Nombre              | Sección | Email
------------------- | ------- | ---------------------
Borja Márquez de la Plata | 3 | [bmarquezdelaplata@uc.cl]
Cristóbal Cuneo       	  | 3 | [cristobal.cuneo@uc.cl]
Lucas Vidal    	      	  | 3 | [lucas.vidal@uc.cl]
Martín Caldentey      	  | 3 | [martincaldenteyl@uc.cl]

El link a nuestra página principal es: https://codd.ing.puc.cl/~grupo13/index.php

### Inicio de sesión
Para iniciar sesión en la aplicación, en primer lugar se deberá presionar el botón "importar usuarios", con lo que se tendrá acceso a una vista con todas las credenciales de tanto las productoras como los artistas. Utilizando cualquiera una de estas se podrá iniciar sesión.

La asignación de estas contraseñas se realiza al momento de importar los usuarios, en el cual se asigna un número aleatorio entre 10000000 y 99999999 a cada usuario.

Los usuarios y contraseñas se encuentran al final de este documento.

### Aclaraciones y supuestos
- Los procedimientos almacenados que se utilizaron fueron los siguientes: ```importar_usuario.sql``` para cargar los artistas y productoras, ```crear_evento.sql``` y ```agregar_artista.sql``` para crear nuevos eventos e invitar a artistas, y por último ```accion_artista.sql``` para actualizar los eventos cuando un artista acepte o rechace la invitación. Estos se encuentran en la carpeta ```stored_procedures```.

- Un evento puede estar en 3 estados distintos: programado (si el evento es aprobado por todos los artistas invitados), en espera de aprobación (si se está a la espera de que los artistas invitados aprueben el evento), y rechazado (si alguno de los artistas invitados rechaza la invitación).

- Si a un evento están invitados múltiples artistas, basta que solo 1 de ellos rechace la invitación para que el evento quede rechazado en su totalidad. Por el otro lado, es necesario contar con la aprobación de todos los artistas para que el evento quede programado. Los eventos cargados del archivo ```.csv``` se considerarán eventos programados.

- Para mostrar las entradas de cortesía disponibles por categoría se utilizaron solamente los datos de las entradas del grupo par, dado que no fue posible establecer una relación entre los datos de ambos grupos. Al consultar por las entradas disponibles para un evento, se muestran las distintas categorías junto a la cantidad de entradas disponibles para cada una de estas.


### Credenciales

Usuario | Contraseña
--------|-----------
Duki  |  62899506
Backstreet_Boys  |  94677671
Michael_Jackson  |  58912608
Mon_Laferte  |  23167838
Khea  |  14582548
Jason_Derulo  |  63947499
Pink_Floyd  |  43665406
Drake  |  85549719
Nicky_Jam  |  52275895
Lola_Indigo  |  68041915
Ñengo_Flow  |  16165519
Big_Time_Rush  |  58315896
Elton_John  |  10148738
Paulo_Londra  |  95508119
Maria_Becerra  |  52797676
Iggy_Azalea  |  83973649
Daniel_Caesar  |  46096678
Rels_B  |  29919125
Feid  |  56014669
Rolling_Stones  |  97283680
Prince_Royce  |  82679435
J_Balvin  |  46623079
Camila_Cabello  |  82613836
Tiago_PZK  |  46145136
Rosalia  |  61154295
Santaferia  |  46707911
DrefQuila  |  79830619
Gepe  |  33814107
Masked_Wolf  |  68776586
Kesha  |  72093274
Billie_Eilish  |  96433793
Soda_Stereo  |  27120769
TWICE  |  38015895
Belinda  |  42892440
Jonas_Brothers  |  30003161
Olivia_Rodrigo  |  13833120
Emilia  |  94935341
Red_Hot_Chili_Peppers  |  41834521
Sebastian_Yatra  |  16092492
AC/DC  |  72653894
Nicky_Romero  |  85316132
Becky_G  |  94601321
Martin_Garrix  |  88446133
Morat  |  96539809
Cazzu  |  33359858
DJ_Snake  |  69838087
Maluma  |  80747592
Francisca_Valenzuela  |  27577675
Coldplay  |  46016727
Afrojack  |  64816449
Farruko  |  11084538
Hardwell  |  71721924
Avicii  |  36786678
Daft_Punk  |  72485521
San_Smith  |  45745820
Mabel  |  17269193
Lewis_Capaldi  |  54696253
Tini_Stoessel  |  27311154
Imagine_Dragons  |  32758580
Zayn  |  55475272
RBD  |  60472943
Natti_Natasha  |  26597799
Bebe_Rexha  |  32028000
Tiesto  |  62128694
Pearl_Jam  |  60719162
Steve_Aoki  |  14924081
Dua_Lipa  |  76935814
Bruno_Mars  |  60102598
Javiera_Mena_  |  44145509
Rita_Ora  |  37151604
Denisse_Rossenthal  |  82251565
Khalid  |  91703807
Mecano  |  94640570
Demi_Lovato  |  99368323
Eminem  |  74332072
Luar_La_L  |  20578576
Romeo_Santos  |  65782648
Zedd  |  95624395
Aerosmith  |  44599142
Eagles  |  52903743
Bee_Gees  |  29565563
Niall_Horan  |  75739220
ABBA  |  33839647
Ed_Sheeran  |  77373615
Rihanna  |  40095856
Sech  |  92967142
Rauw_Alejando  |  66088714
Marshmello  |  35126797
5_Seconds_of_Summer  |  76121641
Alan_Walker  |  72303066
Dimitri_Vegas  |  18494466
Hansen  |  84112123
Lady_Gaga  |  85856201
Fito_Paez  |  87530194
Kygo  |  38958789
Paramore  |  82024994
Blackpink  |  50410104
Trueno  |  25313979
Tate_McRae  |  58640621
Duncan_Laurence  |  40673070
Megan_Trainor  |  99604089
Cirque_du_Solei  |  62935679
Madonna  |  89446857
The_Martinez_Brothers  |  34035675
Beele  |  13074917
Manuel_Turizo  |  61592974
Swedish_House_Mafia  |  66945962
James_Arthur  |  91248687
Armin_Van_Buuren  |  34479358
Chris_Brown  |  14231384
SZA  |  15593656
Harry_Styles  |  98862785
Gustavo_Cerati  |  69139098
Princesa_Alba  |  79332774
Bon_Jovi  |  68707216
Conan_Gray  |  46184813
Nicki_Nicole  |  30720872
Bad_Bunny  |  74054676
Ellie_Gowlding  |  55871777
Los_Prisioneros  |  10201021
Jennifer_Lopez  |  97814452
Sam_Smith  |  29244078
Ozuna  |  68728576
Kudai  |  12765766
Pailita  |  90375436
Jessie_J  |  69212737
Polima_Westcoast  |  99894410
Diplo  |  69853275
Anitta  |  78590119
Katy_Perry  |  25047877
A7S  |  76297316
Lana_del_Rey  |  56346361
R3hab  |  80496535
Justin_Bieber  |  59964465
Karol_G  |  74189132
Louis_Tomlinson  |  48981885
Wisin_&_Yandel  |  86532021
Nathy_Peluso  |  15185526
Post_Malone  |  24941535
C_Tangana  |  37149115
EXO  |  45700959
Taylor_Swift  |  84812926
Jordan_23  |  92283008
Black_Eyed_Peas  |  44025337
One_Direction  |  85167352
Kanye_West  |  86982697
Robin_Schulz  |  47400678
Maroon_5  |  55162104
Oasis  |  90472464
Sia  |  49234182
Daddy_Yankee  |  84459365
El_Alfa  |  74296636
Cami  |  71364051
Tool  |  12833457
Alesso  |  98984393
Wos  |  54506964
Miley_Cyrus  |  51030418
Selena_Gomez  |  19276796
Paloma_Mami  |  61483234
Los_Tres  |  55095069
The_Weeknd  |  62148050
Shakira  |  45509577
Travis_Scott  |  16137608
Beto_Cuevas  |  82609127
New_Kids_on_the_Block  |  94089561
Beyonce  |  42162250
Major_Lazer  |  20967306
Camilo  |  24812633
Snow  |  59492675
BTS  |  87668680
Big_Bang  |  61443951
Calvin_Harris  |  35784549
One_Republic  |  71668769
Marcianeke  |  90451195
Doja_Cat  |  55521935
Lali_Esposito  |  20052297
Queen  |  55486177
Quevedo  |  81484423
David_Guetta  |  26472550
U2  |  57138526
Reik  |  40552655
Anderson_Paak  |  29833760
The_Beatles  |  17300861
La_Ley  |  90857579
My_Chemical_Romance  |  71623822
Cardi_B  |  29873172
Anuel_AA  |  57665808
Skrillex  |  30514878
Radiohead  |  63239379
Cris_MJ  |  72323573
Charly_Garcia  |  83807652
Ariana_Grande  |  67076115
Pablo_Chill-E  |  37710547
Shawn_Mendes  |  97020465
Wiz_Khalifa  |  48203533
La_Oreja_de_Van_Gogh  |  19845156
Bizarrap  |  21117261
Nicki_Minaj  |  31310617
Camila  |  79293332
Mercedes_Sosa  |  69079201
Expat_BELGICA  |  41443167
Noix_producciones_limitada_CHILE  |  49440771
Eventos_luis_maturana_ortega_e.i.r.l_CHILE  |  33850969
PALERMO_FILMS_S.A.__ARGENTINA  |  50921012
Eventlocations_Munchen_ALEMANIA  |  69886721
Centro_de_eventos_aravena_malloco_CHILE  |  38082762
Ecopass_CHILE  |  97108316
Factor_Eventos_COLOMBIA  |  97739804
Dives_eirl_-_productora_de_evento_CHILE  |  62430461
German_norambuena_y_cia_ltda_CHILE  |  37251192
Your_Dream_COLOMBIA  |  14257044
PRELUDIO_PRODUCCIONES_S.A.__ARGENTINA  |  49247294
Comercial_cueto_balmaceda_limitada_CHILE  |  69007082
Grandes_Eventos_ESPAÑA  |  28430963
Wow.cl_CHILE  |  55151746
Lotus_festival_s.a._CHILE  |  61417078
Sach_producciones_y_eventos_limitada_CHILE  |  32168680
Glamour_CHILE  |  95743708
Universal_circus_CHILE  |  78134473
ATOMIC_FILMS_ARGENTINA  |  44664245
Litmind_ALEMANIA  |  24971233
Globscorp_BRASIL  |  65380262
Casa_eventos_CHILE  |  67651882
Event_Hire_Sydney_AUSTRALIA  |  14599224
Lotus_sonar_spa_CHILE  |  66843976
Eventos_y_banqueteria_leonor_contreras_hormazabal_e.i.r.l._CHILE  |  17087998
ROT_Entertainment_COLOMBIA  |  66557324
Live_Nation_ESTADOS UNIDOS  |  35879259
Bafochi_ltda_CHILE  |  74758328
Horwath_Productions_INC._ESTADOS UNIDOS  |  48314764
Agencia_360_BRASIL  |  11186252
Mayam_Producciones_CANADA  |  53859849
Meta_proyectos_sa_CHILE  |  84142387
Millie_Millgate_AUSTRALIA  |  92911585
Yellow_House_CHILE  |  37934734
G_&_t_business_group_spa_CHILE  |  46550452
CONTENIDOS_Y_ENTRETENIMIENTOS_S.A.__ARGENTINA  |  11964248
Ibolele_Producciones_ESPAÑA  |  51709807
Mouro_Producciones_ESPAÑA  |  20095939
COMPAÑÍA_ARGENTINA_DE_SUEÑOS_ARGENTINA  |  78958713
Sinstress_Eventos_COLOMBIA  |  92023400
Los_Angeles_AV_Production_ESTADOS UNIDOS  |  89368610
Nachhaltige_Events_ALEMANIA  |  46135724
Ee_-_servicio_de_eventos_CHILE  |  75942454
PROSPERO_PRODUCCIONES_ARGENTINA  |  95297262
Bierlinerin_ALEMANIA  |  78161396
AEG_ESTADOS UNIDOS  |  12180762
AVANT_GARDE_RP_COLOMBIA  |  84517999
Eventos_F.C_COLOMBIA  |  50346086
Ethno_Nueva_Zelanda_NUEVA ZELANDA  |  89407677
MD+_ARGENTINA  |  61150986
Lets_Dance_NUEVA ZELANDA  |  16817590
Hartmann_Studios_ESTADOS UNIDOS  |  48158075
Dnj_Producciones_COLOMBIA  |  77709088
Freedom_Eventos_COLOMBIA  |  90185280
Queenstown_Event_Company_NUEVA ZELANDA  |  92962827
Event_Production_Company_ESTADOS UNIDOS  |  30041265
Eveerlast_Productions_INC._ESTADOS UNIDOS  |  94870868
Event_Management_NZ_NUEVA ZELANDA  |  92046569
Nikkita_producciones_spa_CHILE  |  51085388
IndyRock_ESPAÑA  |  39257125
Ais_producciones_CHILE  |  93267878
Cucarro_producciones_limitada_CHILE  |  68089850
C&m_musicos_-_musica_y_asesorias_musicales_CHILE  |  10244927
Eventos_comunidad_ombligo_limitada_CHILE  |  35820792
Alto_la_torre_CHILE  |  73107493
Expat_CANADA  |  20007074
Rove.me_BELGICA  |  58150470
Producciones_y_eventos_empire_digital_limitada_CHILE  |  14770017
Producciones_seven_time_entertainment_group_limitada_CHILE  |  76023879
Comercial_audio_tec_limitada_CHILE  |  91604310
fullevent.de_ALEMANIA  |  26597267
PIEDRA_MALA_PRODUCCIONES__ARGENTINA  |  42298504
Alva_producciones_ltda_CHILE  |  58433428
Gn_Producciones_COLOMBIA  |  17145276
Blackgaton_BRASIL  |  43101646
Onlygroundmusic_COLOMBIA  |  16532579
Mundo_Epika_BRASIL  |  80627350
Andeschimp_spa_CHILE  |  67985323
TONICAS_PRODUCCIONES__ARGENTINA  |  90357021
Centro_eventos_torres_de_paine_CHILE  |  68944346
Multimusica_s.a._CHILE  |  77249441
Carlos_alberto_perez_alegria_productora_de_eventos_e.i.r.l_CHILE  |  87332274
Sydney_WorldPride_AUSTRALIA  |  69975845
OZONO_&PIEDRA_MALA_PRODUCCIONES_ARGENTINA  |  75057999
ARIEL_DIWAN_PRODUCCIONES_S.R.L.__ARGENTINA  |  46481774
Wlaceventos_CHILE  |  76073552
Trimade_eventos_limitada_CHILE  |  91935116
Producciones_oz_limitada_CHILE  |  28154379
Agosin_eventos_CHILE  |  98422714
Yataco_BRASIL  |  54146758
Colors_producciones_limitada_CHILE  |  76368478
UN_PLAN_PRODUCCIONES__ARGENTINA  |  17595480
Venue_Hire_Sydney_AUSTRALIA  |  41441564
LINO_PATALANO__ARGENTINA  |  26977989
Centro_de_convenciones_santiago_s.a._CHILE  |  91516571
Virtualia_(productora_de_eventos)_CHILE  |  19119893
Europages_ALEMANIA  |  58175294
Dreams_-_eventos_CHILE  |  65962139
AV_Company_AUSTRALIA  |  51477911
CMG_Audio_Visual_AUSTRALIA  |  69473647
Padrao_Bull_Prime_BRASIL  |  10567061
ATIPICA__ARGENTINA  |  74158348
Centro_de_eventos_dona_sofia_CHILE  |  72766900
Weise_y_asociados_limitada_CHILE  |  99560874
Animationphoenix_COLOMBIA  |  93086333
Comercial_visto_bueno_producciones_limitada_CHILE  |  99380740
Sonnica_producciones_CHILE  |  72045469
Beone_-_entertainment_limitada_CHILE  |  13559788
Eventos_mudness_limitada_CHILE  |  49393899
Actividades_de_entretenimiento_n.c._p_fabiola_patricia_fabres_cerda_em_CHILE  |  73167555
Eventveranstalter_Hamburg_ALEMANIA  |  66908321
LetsGo_Company_ESPAÑA  |  78266900
Reverb_-_productora_de_eventos_CHILE  |  91261033
Live_Nation_ESPAÑA  |  75862584
efeunodos_COLOMBIA  |  51841676
Hispagenda_BELGICA  |  16798565
Carpas_karen_ltda_CHILE  |  97871380
Sony_music_entertainment_chile_s.a._CHILE  |  61877632
Onanof_producciones_limitada_CHILE  |  12389019
Club_providencia_CHILE  |  23645315
Yataco_ALEMANIA  |  73852537
Lotus_producciones_limitada_CHILE  |  81470524
Janos_Eventos_BRASIL  |  37939757
Rocko_Saroni_Eventos_COLOMBIA  |  50909603
EL_MAGNO_PRODUCCIONES_S.R.L.__ARGENTINA  |  52589275
Soc_giacaman_y_cia_ltda_CHILE  |  90962583
CK_Events_Germany_ALEMANIA  |  27102831
Eventos_Toronto_Shaddai_CANADA  |  81915986
Top_Brand_COLOMBIA  |  13540965
MEDIOS_Y_CONTENIDOS_PRODUCCIONES__ARGENTINA  |  85607330
Corral_y_asociados_limitada_CHILE  |  30698060
Sociedad_comercial_metapega_producciones_limitada_CHILE  |  72966467
Tyg_Eventos_y_Producciones_COLOMBIA  |  22756874
Latitud_music_spa_CHILE  |  44847380
X_Producciones_CHILE  |  74386712
Somosfk_COLOMBIA  |  20525464
Comercial_caupolican_limitada_CHILE  |  17092990
ESPECTACULOS_GALLO_ARGENTINA  |  55960450
Street_machine_producciones_s.a._CHILE  |  52732954
FMG_PRODUCCIONES_ARGENTINA  |  53648031
EventsEye_CANADA  |  64482348
FEG_ENTRETENIMIENTOS_ARGENTINA  |  26733012
T-entertainment_multi_producciones_(sebastian_torres_cortes_e.i.r.l)._CHILE  |  25873032
manatua.nz_NUEVA ZELANDA  |  40171353
GJ_COMUNICACIONES_COLOMBIA  |  51742014
Producciones_musicales_massivo_reccords_limitada_CHILE  |  45569939
Apparcel_producciones_limitada_CHILE  |  65315278
Eventos_flores_y_padilla_limitada_CHILE  |  33435039
AS_Relaciones_Publicas_COLOMBIA  |  29120522
Productora_babilonia_limitada_CHILE  |  42444016
Janos_Eventos_ARGENTINA  |  38515427
Entretenciones_jovi_limitada_CHILE  |  13553564
CSI_DMC_ESTADOS UNIDOS  |  56698597
MGC_AUSTRALIA  |  27955753
K_PRODUCCIONES_S.A._ARGENTINA  |  76109562
Global_producciones_spa_CHILE  |  18912910
Capsule_producciones_spa_CHILE  |  97045899
Iragons_Party_COLOMBIA  |  68000983
GL_events_AUSTRALIA  |  88637465
Soc_concesionaria_arena_bicentenario_s_a_CHILE  |  74043207
Ditecsur_BRASIL  |  64389579
The_Imagos_ESTADOS UNIDOS  |  60939309
Revelation_ESTADOS UNIDOS  |  94714389
Ramasso_Productora_ARGENTINA  |  14390505
Ultrabeatman_Entretenimiento_Puro_BRASIL  |  30346067
BDD_Producciones_CHILE  |  82164616
Torres_petronas_spa_CHILE  |  15733368
Glovox_producciones_limitada_CHILE  |  63722835
Productora_chile_espectaculos_CHILE  |  90157580
Dedalo_producciones_CHILE  |  14316589
Huma_Producciones_COLOMBIA  |  46661748
YouTOOProject_AUSTRALIA  |  49465240
ARTES_Y_EVENTOS_INTERNACIONALES_S.A.__ARGENTINA  |  69519964
GRUS__ARGENTINA  |  52224575
AP_Eventos_COLOMBIA  |  15602322
Cream_entertainment_group_spa_CHILE  |  59169053
GL_events_BELGICA  |  30120441
Recreo_producciones_spa_CHILE  |  69263164
Grupo_previa_s.a._CHILE  |  65345709
K_INTERNATIONAL__ARGENTINA  |  35031069
Litmind_BELGICA  |  16237893
BRL_Eventos_BRASIL  |  84730401
Cultura_ciudadana_CHILE  |  59411579
Chocolate_stage_s.a._CHILE  |  98283111
Eventos_y_producciones_evolucion_s.a_CHILE  |  85117321
DG_Medios_y_espectaculos_s.a._CHILE  |  21784705
903_COLOMBIA  |  41513771
Somosfk_BRASIL  |  28663046
Kibon_video_CHILE  |  89152209
Time_for_fun_(t4f)_CHILE  |  92765397
Ye_&_Ca_Producciones_COLOMBIA  |  32601933
T4F_ENTRETENIMIENTOS_ARGENTINA__ARGENTINA  |  43376821
ESTADIUM_LUNA_PARK_ARGENTINA  |  26161962
Bautrip_BELGICA  |  29567854
Vision_world_producciones_limitada_CHILE  |  70187825
Urban_Music_BRASIL  |  85005927
Productora_de_eventos_moviefan_limitada_CHILE  |  25781231
Bizarro_producciones_limitada_CHILE  |  24869500
Entertainment_group_CHILE  |  71335682
LA_CRYPTA_S.A.__ARGENTINA  |  30123918
Actitud_creaciones_CHILE  |  36292642
Brasil_Stands_BRASIL  |  80033405
Tolten_eventos_CHILE  |  18007502
MCA_AUSTRALIA  |  72239428
Planet_Events_ESPAÑA  |  87672405
Energika_eventos_limitada_CHILE  |  52448588
MGC_ALEMANIA  |  71492142
Top_Bruselas_BELGICA  |  79702608
Fg_producciones_CHILE  |  38210020
Merci_entertainment_spa_CHILE  |  53756027
Xceed_BELGICA  |  65113065
Arte3_CHILE  |  89887785
Carlos_lopez_vega_productora_de_eventos_CHILE  |  39268539
Audio_Level_Eventos_COLOMBIA  |  77350332
Medios_y_contenidos_producciones_de_chile_s.a._CHILE  |  42496396
Leading_Event_Agency_NUEVA ZELANDA  |  95689606
BLAO_ARGENTINA  |  65792764
Sono_producciones_limitada_CHILE  |  54393731
B+D_Events_ALEMANIA  |  15840106
Andres_gardeweg_producciones_e.i.r.l_CHILE  |  14376269
Productora_energy_in_motion_limitada_CHILE  |  31369553
Producciones_Baltimore_ESPAÑA  |  16205159
Sociedad_comercial_mk_pro_limitada_CHILE  |  17921649
Canada_Eventos_CANADA  |  33502374
Producciones_Walter_Beat_COLOMBIA  |  80271596
EL_VASCO_PRODUCCIONES__ARGENTINA  |  27451797
Productora_dreams_pro_limitada_CHILE  |  32703608
Aguero_producciones_limitada_CHILE  |  74443408
Privadate_COLOMBIA  |  84106396
KahnEvents_GmbH_ALEMANIA  |  93657986
Club_de_la_union_CHILE  |  88030923
Backstage_rockstore_s.a._CHILE  |  84019875
Charco_booking_spa_CHILE  |  20223398
El_trebol_CHILE  |  96024980
Yataco_CANADA  |  47321897
Palma_y_compania_limitada_CHILE  |  55119858
Global_Journey_BELGICA  |  93769298
Expat_AUSTRALIA  |  30533689




