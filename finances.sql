DROP DATABASE IF EXISTS [Finances]
/****** Object:  Database [Finances] ******/
CREATE DATABASE [Finances]
 CONTAINMENT = NONE
 ON  PRIMARY 
( NAME = N'Finances', FILENAME = N'C:\Program Files\Microsoft SQL Server\MSSQL15.MSSQLSERVER\MSSQL\DATA\Finances.mdf' , SIZE = 8192KB , MAXSIZE = UNLIMITED, FILEGROWTH = 65536KB )
 LOG ON 
( NAME = N'Finances_log', FILENAME = N'C:\Program Files\Microsoft SQL Server\MSSQL15.MSSQLSERVER\MSSQL\DATA\Finances_log.ldf' , SIZE = 8192KB , MAXSIZE = 2048GB , FILEGROWTH = 65536KB )
 WITH CATALOG_COLLATION = DATABASE_DEFAULT
GO
ALTER DATABASE [Finances] SET COMPATIBILITY_LEVEL = 150
GO
IF (1 = FULLTEXTSERVICEPROPERTY('IsFullTextInstalled'))
begin
EXEC [Finances].[dbo].[sp_fulltext_database] @action = 'enable'
end
GO
ALTER DATABASE [Finances] SET ANSI_NULL_DEFAULT OFF 
GO
ALTER DATABASE [Finances] SET ANSI_NULLS OFF 
GO
ALTER DATABASE [Finances] SET ANSI_PADDING OFF 
GO
ALTER DATABASE [Finances] SET ANSI_WARNINGS OFF 
GO
ALTER DATABASE [Finances] SET ARITHABORT OFF 
GO
ALTER DATABASE [Finances] SET AUTO_CLOSE OFF 
GO
ALTER DATABASE [Finances] SET AUTO_SHRINK OFF 
GO
ALTER DATABASE [Finances] SET AUTO_UPDATE_STATISTICS ON 
GO
ALTER DATABASE [Finances] SET CURSOR_CLOSE_ON_COMMIT OFF 
GO
ALTER DATABASE [Finances] SET CURSOR_DEFAULT  GLOBAL 
GO
ALTER DATABASE [Finances] SET CONCAT_NULL_YIELDS_NULL OFF 
GO
ALTER DATABASE [Finances] SET NUMERIC_ROUNDABORT OFF 
GO
ALTER DATABASE [Finances] SET QUOTED_IDENTIFIER OFF 
GO
ALTER DATABASE [Finances] SET RECURSIVE_TRIGGERS OFF 
GO
ALTER DATABASE [Finances] SET  DISABLE_BROKER 
GO
ALTER DATABASE [Finances] SET AUTO_UPDATE_STATISTICS_ASYNC OFF 
GO
ALTER DATABASE [Finances] SET DATE_CORRELATION_OPTIMIZATION OFF 
GO
ALTER DATABASE [Finances] SET TRUSTWORTHY OFF 
GO
ALTER DATABASE [Finances] SET ALLOW_SNAPSHOT_ISOLATION OFF 
GO
ALTER DATABASE [Finances] SET PARAMETERIZATION SIMPLE 
GO
ALTER DATABASE [Finances] SET READ_COMMITTED_SNAPSHOT OFF 
GO
ALTER DATABASE [Finances] SET HONOR_BROKER_PRIORITY OFF 
GO
ALTER DATABASE [Finances] SET RECOVERY SIMPLE 
GO
ALTER DATABASE [Finances] SET  MULTI_USER 
GO
ALTER DATABASE [Finances] SET PAGE_VERIFY CHECKSUM  
GO
ALTER DATABASE [Finances] SET DB_CHAINING OFF 
GO
ALTER DATABASE [Finances] SET FILESTREAM( NON_TRANSACTED_ACCESS = OFF ) 
GO
ALTER DATABASE [Finances] SET TARGET_RECOVERY_TIME = 60 SECONDS 
GO
ALTER DATABASE [Finances] SET DELAYED_DURABILITY = DISABLED 
GO
ALTER DATABASE [Finances] SET ACCELERATED_DATABASE_RECOVERY = OFF  
GO
EXEC sys.sp_db_vardecimal_storage_format N'Finances', N'ON'
GO
ALTER DATABASE [Finances] SET QUERY_STORE = OFF
GO
USE [Finances]
GO
/****** Object:  Table [dbo].[DimBank] ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[DimBank](
	[BankID] [int] NOT NULL,
	[BankName] [varchar](50) NOT NULL,
 CONSTRAINT [PK_DimCardBank] PRIMARY KEY CLUSTERED 
(
	[BankID] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[DimBuyer] ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[DimBuyer](
	[BuyerID] [int] NOT NULL,
	[BuyerName] [varchar](50) NOT NULL,
 CONSTRAINT [PK_DimBuyer] PRIMARY KEY CLUSTERED 
(
	[BuyerID] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[DimCard] ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[DimCard](
	[CardID] [int] NOT NULL,
	[CardNumber] [varchar](19) NOT NULL,
	[CardTypeID] [int] NOT NULL,
	[BankID] [int] NOT NULL,
	[CardBrandID] [int] NOT NULL,
 CONSTRAINT [PK_DimCard] PRIMARY KEY CLUSTERED 
(
	[CardID] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[DimCardBrand] ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[DimCardBrand](
	[CardBrandID] [int] NOT NULL,
	[CardBrandName] [varchar](10) NOT NULL,
 CONSTRAINT [PK_DimCardBrand] PRIMARY KEY CLUSTERED 
(
	[CardBrandID] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[DimCardType] ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[DimCardType](
	[CardTypeID] [int] NOT NULL,
	[CardTypeName] [varchar](6) NOT NULL,
 CONSTRAINT [PK_DimCardType] PRIMARY KEY CLUSTERED 
(
	[CardTypeID] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[DimCategory] ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[DimCategory](
	[CategoryID] [int] NOT NULL,
	[CategoryName] [varchar](50) NOT NULL,
 CONSTRAINT [PK_DimCategory] PRIMARY KEY CLUSTERED 
(
	[CategoryID] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[DimCity] ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[DimCity](
	[CityID] [int] NOT NULL,
	[CityName] [varchar](50) NOT NULL,
	[ProvinceID] [int] NOT NULL,
 CONSTRAINT [PK_DimCity] PRIMARY KEY CLUSTERED 
(
	[CityID] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[DimCountry] ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[DimCountry](
	[CountryID] [int] NOT NULL,
	[CountryName] [varchar](255) NOT NULL,
 CONSTRAINT [PK_DimCountry] PRIMARY KEY CLUSTERED 
(
	[CountryID] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[DimDay] ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[DimDay](
	[DayID] [varchar](8) NOT NULL,
	[FullDateAlternateKey] [date] NOT NULL,
	[CalendarQuarter] [tinyint] NOT NULL,
	[CalendarYear] [smallint] NOT NULL,
	[CalendarSemester] [tinyint] NOT NULL,
	[DayOfWeek] [tinyint] NOT NULL,
	[CalendarMonth] [smallint] NOT NULL,
 CONSTRAINT [PK_DimDay] PRIMARY KEY CLUSTERED 
(
	[DayID] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[DimPaymentMethod] ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[DimPaymentMethod](
	[PaymentMethodID] [int] NOT NULL,
	[PaymentMethodName] [varchar](50) NOT NULL,
	[CardID] [int] NOT NULL,
 CONSTRAINT [PK_DimPaymentMethod] PRIMARY KEY CLUSTERED 
(
	[PaymentMethodID] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[DimProvince] ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[DimProvince](
	[ProvinceID] [int] NOT NULL,
	[ProvinceName] [varchar](25) NOT NULL,
	[CountryID] [int] NOT NULL,
 CONSTRAINT [PK_DimProvince] PRIMARY KEY CLUSTERED 
(
	[ProvinceID] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[DimSeller] ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[DimSeller](
	[SellerID] [int] NOT NULL,
	[SellerName] [varchar](50) NOT NULL,
 CONSTRAINT [PK_DimSeller] PRIMARY KEY CLUSTERED 
(
	[SellerID] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[FactPurchases] ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[FactPurchases](
	[TotalPurchases] [money] NOT NULL,
	[Description] [varchar](1000) NOT NULL,
	[CityID] [int] NOT NULL,
	[DayID] [varchar](8) NOT NULL,
	[PaymentMethodID] [int] NOT NULL,
	[SellerID] [int] NOT NULL,
	[CategoryID] [int] NOT NULL,
	[CategoryDeduplicate] [int] NOT NULL,
 CONSTRAINT [PK_FactPurchases] PRIMARY KEY CLUSTERED 
(
	[CityID] ASC,
	[DayID] ASC,
	[PaymentMethodID] ASC,
	[SellerID] ASC,
	[CategoryID] ASC,
	[CategoryDeduplicate] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[FactPurchasesXDimCategory] ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[FactPurchasesXDimCategory](
	[CityID] [int] NOT NULL,
	[DayID] [varchar](8) NOT NULL,
	[PaymentMethodID] [int] NOT NULL,
	[SellerID] [int] NOT NULL,
	[CategoryID] [int] NOT NULL,
	[CategoryDeduplicate] [int] NOT NULL
 CONSTRAINT [PK_FactPurchasesXDimCategory] PRIMARY KEY CLUSTERED 
(
	[CityID] ASC,
	[DayID] ASC,
	[PaymentMethodID] ASC,
	[SellerID] ASC,
	[CategoryID] ASC,
	[CategoryDeduplicate] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[FactSales] ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[FactSales](
	[TotalSales] [money] NOT NULL,
	[Description] [varchar](1000) NOT NULL,
	[CityID] [int] NOT NULL,
	[DayID] [varchar](8) NOT NULL,
	[PaymentMethodID] [int] NOT NULL,
	[BuyerID] [int] NOT NULL,
	[CategoryID] [int] NOT NULL,
	[CategoryDeduplicate] [int] NOT NULL
 CONSTRAINT [PK_FactSales] PRIMARY KEY CLUSTERED 
(
	[CityID] ASC,
	[DayID] ASC,
	[PaymentMethodID] ASC,
	[BuyerID] ASC,
	[CategoryID] ASC,
	[CategoryDeduplicate] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[FactSalesXDimCategory] ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[FactSalesXDimCategory](
	[CityID] [int] NOT NULL,
	[DayID] [varchar](8) NOT NULL,
	[PaymentMethodID] [int] NOT NULL,
	[BuyerID] [int] NOT NULL,
	[CategoryID] [int] NOT NULL,
	[CategoryDeduplicate] [int] NOT NULL,
 CONSTRAINT [PK_FactSalesXDimCategory] PRIMARY KEY CLUSTERED 
(
	[CityID] ASC,
	[DayID] ASC,
	[PaymentMethodID] ASC,
	[BuyerID] ASC,
	[CategoryID] ASC,
	[CategoryDeduplicate] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
ALTER TABLE [dbo].[DimCard]  WITH CHECK ADD  CONSTRAINT [FK_DimCard_DimBank] FOREIGN KEY([BankID])
REFERENCES [dbo].[DimBank] ([BankID])
ON UPDATE CASCADE
ON DELETE CASCADE
GO
ALTER TABLE [dbo].[DimCard] CHECK CONSTRAINT [FK_DimCard_DimBank]
GO
ALTER TABLE [dbo].[DimCard]  WITH CHECK ADD  CONSTRAINT [FK_DimCard_DimCardBrand] FOREIGN KEY([CardBrandID])
REFERENCES [dbo].[DimCardBrand] ([CardBrandID])
ON UPDATE CASCADE
ON DELETE CASCADE
GO
ALTER TABLE [dbo].[DimCard] CHECK CONSTRAINT [FK_DimCard_DimCardBrand]
GO
ALTER TABLE [dbo].[DimCard]  WITH CHECK ADD  CONSTRAINT [FK_DimCard_DimCardType] FOREIGN KEY([CardTypeID])
REFERENCES [dbo].[DimCardType] ([CardTypeID])
ON UPDATE CASCADE
ON DELETE CASCADE
GO
ALTER TABLE [dbo].[DimCard] CHECK CONSTRAINT [FK_DimCard_DimCardType]
GO
ALTER TABLE [dbo].[DimPaymentMethod]  WITH CHECK ADD  CONSTRAINT [FK_DimPaymentMethod_DimCard] FOREIGN KEY([CardID])
REFERENCES [dbo].[DimCard] ([CardID])
ON UPDATE CASCADE
ON DELETE CASCADE
GO
ALTER TABLE [dbo].[DimPaymentMethod] CHECK CONSTRAINT [FK_DimPaymentMethod_DimCard]
GO
ALTER TABLE [dbo].[DimProvince]  WITH CHECK ADD  CONSTRAINT [FK_DimProvince_DimCountry] FOREIGN KEY([CountryID])
REFERENCES [dbo].[DimCountry] ([CountryID])
ON UPDATE CASCADE
ON DELETE CASCADE
GO
ALTER TABLE [dbo].[DimProvince] CHECK CONSTRAINT [FK_DimProvince_DimCountry]
GO
ALTER TABLE [dbo].[FactPurchases]  WITH CHECK ADD  CONSTRAINT [FK_FactPurchases_FactPurchasesXDimCategory] FOREIGN KEY([CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate])
REFERENCES [dbo].[FactPurchasesXDimCategory] ([CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate])
ON UPDATE CASCADE
ON DELETE CASCADE
GO
ALTER TABLE [dbo].[FactPurchases] CHECK CONSTRAINT [FK_FactPurchases_FactPurchasesXDimCategory]
GO
ALTER TABLE [dbo].[FactPurchasesXDimCategory]  WITH CHECK ADD  CONSTRAINT [FK_FactPurchasesXDimCategory_DimCategory] FOREIGN KEY([CategoryID])
REFERENCES [dbo].[DimCategory] ([CategoryID])
ON UPDATE CASCADE
ON DELETE CASCADE
GO
ALTER TABLE [dbo].[FactPurchasesXDimCategory] CHECK CONSTRAINT [FK_FactPurchasesXDimCategory_DimCategory]
GO
ALTER TABLE [dbo].[FactPurchasesXDimCategory]  WITH CHECK ADD  CONSTRAINT [FK_FactPurchasesXDimCategory_DimCity] FOREIGN KEY([CityID])
REFERENCES [dbo].[DimCity] ([CityID])
ON UPDATE CASCADE
ON DELETE CASCADE
GO
ALTER TABLE [dbo].[FactPurchasesXDimCategory] CHECK CONSTRAINT [FK_FactPurchasesXDimCategory_DimCity]
GO
ALTER TABLE [dbo].[FactPurchasesXDimCategory]  WITH CHECK ADD  CONSTRAINT [FK_FactPurchasesXDimCategory_DimDay] FOREIGN KEY([DayID])
REFERENCES [dbo].[DimDay] ([DayID])
ON UPDATE CASCADE
ON DELETE CASCADE
GO
ALTER TABLE [dbo].[FactPurchasesXDimCategory] CHECK CONSTRAINT [FK_FactPurchasesXDimCategory_DimDay]
GO
ALTER TABLE [dbo].[FactPurchasesXDimCategory]  WITH CHECK ADD  CONSTRAINT [FK_FactPurchasesXDimCategory_DimPaymentMethod] FOREIGN KEY([PaymentMethodID])
REFERENCES [dbo].[DimPaymentMethod] ([PaymentMethodID])
GO
ALTER TABLE [dbo].[FactPurchasesXDimCategory] CHECK CONSTRAINT [FK_FactPurchasesXDimCategory_DimPaymentMethod]
GO
ALTER TABLE [dbo].[FactPurchasesXDimCategory]  WITH CHECK ADD  CONSTRAINT [FK_FactPurchasesXDimCategory_DimSeller] FOREIGN KEY([SellerID])
REFERENCES [dbo].[DimSeller] ([SellerID])
ON UPDATE CASCADE
ON DELETE CASCADE
GO
ALTER TABLE [dbo].[FactPurchasesXDimCategory] CHECK CONSTRAINT [FK_FactPurchasesXDimCategory_DimSeller]
GO
ALTER TABLE [dbo].[FactSales]  WITH CHECK ADD  CONSTRAINT [FK_FactSales_FactSales] FOREIGN KEY([CityID], [DayID], [PaymentMethodID], [BuyerID], [CategoryID], [CategoryDeduplicate])
REFERENCES [dbo].[FactSalesXDimCategory] ([CityID], [DayID], [PaymentMethodID], [BuyerID], [CategoryID], [CategoryDeduplicate])
ON UPDATE CASCADE
ON DELETE CASCADE
GO
ALTER TABLE [dbo].[FactSales] CHECK CONSTRAINT [FK_FactSales_FactSales]
GO
ALTER TABLE [dbo].[FactSalesXDimCategory]  WITH CHECK ADD  CONSTRAINT [FK_FactSalesXDimCategory_DimBuyer] FOREIGN KEY([BuyerID])
REFERENCES [dbo].[DimBuyer] ([BuyerID])
ON UPDATE CASCADE
ON DELETE CASCADE
GO
ALTER TABLE [dbo].[FactSalesXDimCategory] CHECK CONSTRAINT [FK_FactSalesXDimCategory_DimBuyer]
GO
ALTER TABLE [dbo].[FactSalesXDimCategory]  WITH CHECK ADD  CONSTRAINT [FK_FactSalesXDimCategory_DimCategory] FOREIGN KEY([CategoryID])
REFERENCES [dbo].[DimCategory] ([CategoryID])
GO
ALTER TABLE [dbo].[FactSalesXDimCategory] CHECK CONSTRAINT [FK_FactSalesXDimCategory_DimCategory]
GO
ALTER TABLE [dbo].[FactSalesXDimCategory]  WITH CHECK ADD  CONSTRAINT [FK_FactSalesXDimCategory_DimCity] FOREIGN KEY([CityID])
REFERENCES [dbo].[DimCity] ([CityID])
GO
ALTER TABLE [dbo].[FactSalesXDimCategory] CHECK CONSTRAINT [FK_FactSalesXDimCategory_DimCity]
GO
ALTER TABLE [dbo].[FactSalesXDimCategory]  WITH CHECK ADD  CONSTRAINT [FK_FactSalesXDimCategory_DimDay] FOREIGN KEY([DayID])
REFERENCES [dbo].[DimDay] ([DayID])
GO
ALTER TABLE [dbo].[FactSalesXDimCategory] CHECK CONSTRAINT [FK_FactSalesXDimCategory_DimDay]
GO
ALTER TABLE [dbo].[FactSalesXDimCategory]  WITH CHECK ADD  CONSTRAINT [FK_FactSalesXDimCategory_DimPaymentMethod] FOREIGN KEY([PaymentMethodID])
REFERENCES [dbo].[DimPaymentMethod] ([PaymentMethodID])
GO
ALTER TABLE [dbo].[FactSalesXDimCategory] CHECK CONSTRAINT [FK_FactSalesXDimCategory_DimPaymentMethod]
GO
USE [master]
GO
ALTER DATABASE [Finances] SET  READ_WRITE 
GO
