# Arkham Asylum - New Game Minus Setup

Open BmGame.ini, located at:   
> %UserProfile%\Documents\Square Enix\Batman Arkham Asylum GOTY\BmGame\Config\\

Locate the following line: *(should be line 96)*   
`DebugLevelStarts=(Name="FE_NewGame", LevelNames="start batentry?Area=Max,Max_C0,Max_C0_Audio,Max_C0_CLights,Max_C0_FX,Max_C0_Lights,Max_C0_Static,Max_A1,Max_A1_Audio,Max_A1_CH1,Max_A1_CLights,Max_A1_Fx,Max_A1_Lights,Max_A1_Static,Max_IntroParty,Max_IntroAudio?Flags=Chapter1_Start,gamestart,Batman_AbilitiesScreenDisabled,Batman_EnvAnalysisDisabled,Batman_RiddlesDisabled,Batman_RiddlerChallengesDisabled?Start=BeginGame?Movie=101_Batmobile_Intro?StreamMovie")`   

To start with **every gadget and upgrade**, replace that line with this:   
`DebugLevelStarts=(Name="FE_NewGame", LevelNames="start batentry?Area=Max,Max_C0,Max_C0_Audio,Max_C0_CLights,Max_C0_FX,Max_C0_Lights,Max_C0_Static,Max_A1,Max_A1_Audio,Max_A1_CH1,Max_A1_CLights,Max_A1_Fx,Max_A1_Lights,Max_A1_Static,Max_IntroParty,Max_IntroAudio?Flags=Chapter1_Start,gamestart,Unlocked_Health1,Unlocked_Health2,Unlocked_Health3,Unlocked_Health4,Equip_HarpoonGunLv2,Equip_LineLauncher,Equip_ExplosiveGoo,Equip_Resonator2,Unlocked_BatarangStunTime,Unlocked_BatarangTarget2,Unlocked_BatarangTarget3,Unlocked_ExplodeSolo,Unlocked_ProximityMine,Unlocked_SonicBatarang,Unlocked_SonicBatarangExp,Unlocked_ResonatorRange,Unlocked_ResonatorEasy,Unlocked_BatarangSteer,Unlocked_AnytimeTd,Unlocked_FloorGrateTd,Unlocked_GlassSmashTd,Unlocked_HangAttackTd,Unlocked_CombatThrow,Unlocked_QuickTakedown,Unlocked_DoublePowerCombo,Unlocked_LedgeGrab,Unlocked_ComboBatarang,Unlocked_ComboBoost?Start=BeginGame")`   

To start with all gadgets and uprgades **except Armor upgrades**, replace that line with this:   
`DebugLevelStarts=(Name="FE_NewGame", LevelNames="start batentry?Area=Max,Max_C0,Max_C0_Audio,Max_C0_CLights,Max_C0_FX,Max_C0_Lights,Max_C0_Static,Max_A1,Max_A1_Audio,Max_A1_CH1,Max_A1_CLights,Max_A1_Fx,Max_A1_Lights,Max_A1_Static,Max_IntroParty,Max_IntroAudio?Flags=Chapter1_Start,gamestart,Equip_HarpoonGunLv2,Equip_LineLauncher,Equip_ExplosiveGoo,Equip_Resonator2,Unlocked_BatarangStunTime,Unlocked_BatarangTarget2,Unlocked_BatarangTarget3,Unlocked_ExplodeSolo,Unlocked_ProximityMine,Unlocked_SonicBatarang,Unlocked_SonicBatarangExp,Unlocked_ResonatorRange,Unlocked_ResonatorEasy,Unlocked_BatarangSteer,Unlocked_AnytimeTd,Unlocked_FloorGrateTd,Unlocked_GlassSmashTd,Unlocked_HangAttackTd,Unlocked_CombatThrow,Unlocked_QuickTakedown,Unlocked_DoublePowerCombo,Unlocked_LedgeGrab,Unlocked_ComboBatarang,Unlocked_ComboBoost?Start=BeginGame")`   

To start with all gadgets and uprgades **except Armor, Proximity Gel, and Individual Gel Detonation upgrades**, replace that line with this:   
`DebugLevelStarts=(Name="FE_NewGame", LevelNames="start batentry?Area=Max,Max_C0,Max_C0_Audio,Max_C0_CLights,Max_C0_FX,Max_C0_Lights,Max_C0_Static,Max_A1,Max_A1_Audio,Max_A1_CH1,Max_A1_CLights,Max_A1_Fx,Max_A1_Lights,Max_A1_Static,Max_IntroParty,Max_IntroAudio?Flags=Chapter1_Start,gamestart,Equip_HarpoonGunLv2,Equip_LineLauncher,Equip_ExplosiveGoo,Equip_Resonator2,Unlocked_BatarangStunTime,Unlocked_BatarangTarget2,Unlocked_BatarangTarget3,Unlocked_SonicBatarang,Unlocked_SonicBatarangExp,Unlocked_ResonatorRange,Unlocked_ResonatorEasy,Unlocked_BatarangSteer,Unlocked_AnytimeTd,Unlocked_FloorGrateTd,Unlocked_GlassSmashTd,Unlocked_HangAttackTd,Unlocked_CombatThrow,Unlocked_QuickTakedown,Unlocked_DoublePowerCombo,Unlocked_LedgeGrab,Unlocked_ComboBatarang,Unlocked_ComboBoost?Start=BeginGame")`   

You must reload a checkpoint for the gadgets and upgrades to become available. Any checkpoint will work.   
Having Armor upgrades makes the fist titan fight take longer.   
Having the Proximity Gel upgrade can be troublesome in the double titan fight, and in the Joker boss fight.
